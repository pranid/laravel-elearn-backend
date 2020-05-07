<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Practice exam papers and prepare for your examinations">
        <link rel="icon" href="{{ url('/logo.png') }}" type="image/ico"/>

        <title>E-LEARN-BUDDY</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Scripts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />

        <!-- Styles -->
        <style>
            body {
                background-color: #e8e8e8;
                color:#ffa300;
                text-align: center;
            }

            .title {
                margin-top: 5%;
            }

            .logo-img {
                height: 400px;
                margin-top: 5%;
            }
            .comn-soon {
                color: #575772;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col">
                <img src="{{ url('/logo.png') }}" alt="E-LEARN-BUDDY" class="logo-img animated fadeInDown">
                <h1 class="title animated fadeInDown">E-LEARN-BUDDY</h1>
                <h2 class="comn-soon animated infinite heartBeat">Coming soon</h2>
            </div>
        </div>
    </body>
</html>
