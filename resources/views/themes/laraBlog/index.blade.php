<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset(url('/assets/css/bootstrap.min.css'))}}" rel="stylesheet">
    <link href="{{asset(url('/assets/css/adminStyle.css'))}}" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 20px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content" style="text-align: center">
        <div class="title m-b-md">
            <div class="top-right links">
                @auth
                    <h3>My First Laravel Application</h3>
                    <small>Start Creating Awesome Laravel Applications</small><br>
                    <a href="{{ url('/cc-admin') }}">Home</a>
                @else
                    <h3>All Done!</h3>
                    <small>Start Creating Awesome Laravel Applications</small><br>
                    <a href="{{ route('login') }}">Login</a>
            @endauth
            </div>

        </div>
    </div>
</div>
</body>
</html>
