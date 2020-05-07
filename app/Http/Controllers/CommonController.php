<?php

namespace App\Http\Controllers;

use App\SlPostalCode;
use App\Utils\ResponseUtil;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function getCities(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ]);

        $seach_txt = $request->search;

        $data = SlPostalCode::select('id','city')->where('city','like', "$seach_txt%")->get();

        $response = new ResponseUtil();
        $response->success = true;
        $response->data = $data;

        return response($response->getArray());
    }
}
