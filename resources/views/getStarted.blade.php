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
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="setup-content">
            <h4>Few Details about your application</h4>
            <br>
            <div class="setup-form col-md-12" style="margin: 0 auto">
                    <form action="{{url('getStarted')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="name">Project Name <span class="required-field">*</span></label>
                                <input type="text" name="projectName" value="test" required placeholder="Enter name of project">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="name">Email Address <span class="required-field">*</span></label>
                                <input type="email" name="email" value="nicholas@gmail.com" required placeholder="Admin email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="name">Database name <span class="required-field">*</span></label>
                                <input type="text" name="dbName" value="testDb" required placeholder="Username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="name">Database user <span class="required-field">*</span></label>
                                <input type="text" name="dbUser" value="testUser" required placeholder="Username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="name">Database password </label>
                                <input type="password" name="dbPass" value="nicklas" placeholder="DB Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="name">Dashboard password <span class="required-field">*</span></label>
                                <input required name="dashPassword" value="nickals" type="password" placeholder="Enter admin password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
