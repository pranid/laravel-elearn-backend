<?php

namespace App\Http\Controllers;

use App\User;
use App\Utils\ResponseUtil;
use App\Utils\ValidatorUtil;
use Illuminate\Http\Request;
use Lcobucci\JWT\Parser;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|unique:users',
            'city_id' => 'required|exists:App\SlPostalCode,id',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'city_id' => $request->city_id,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('AuthToken')->accessToken;

        $response = new ResponseUtil();
        $response->success = true;
        $response->data = [
            'token' => $token
        ];
        $response->message = "Registration success!";
        return response()->json($response->getArray(), 200);
    }

    public function login(Request $request)
    {
        $credentials = [
            'mobile' => $request->mobile,
            'password' => $request->password
        ];

        $response = new ResponseUtil();

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('AuthToken')->accessToken;

            $response->success = true;
            $response->data = [
                'token' => $token,
                'user' => auth()->user()->with('slPostalCodes')->get()
            ];
            $response->message = "Registration success!";
            return response()->json($response->getArray(), 200);
        } else {
            $response->success = false;
            $response->error = "Invalid login credentials";
            return response()->json($response->getArray(), 401);
        }
    }

    public function details()
    {
        $response = new ResponseUtil();
        $response->success = true;
        $response->data = [
            'user' => auth()->user()->with('slPostalCodes')->get()
        ];
        return response()->json($response->getArray(), 200);
    }

    public function logout(Request $request)
    {
        $value = $request->bearerToken();
        $id = (new Parser())->parse($value)->getHeader('jti');
        $token = $request->user()->tokens->find($id);
        $token->revoke();
        return response('You have been successfully logged out!', 200);
    }
}
