<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CC Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="{{asset(url('/assets/css/bootstrap.min.css'))}}" rel="stylesheet">
    <link href="{{asset(url('/assets/css/metisMenu.min.css'))}}" rel="stylesheet">
    <link href="{{asset(url('/assets/css/icons.css'))}}" rel="stylesheet">
    <link href="{{asset(url('/assets/css/adminStyle.css'))}}" rel="stylesheet">
</head>


<body>

<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 card-box">
                        <div class="text-center">
                            <h2 class="text-uppercase m-t-0 m-b-30">
                                <a href="index.html" class="text-danger">
                                    CC Admin
{{--                                    <span><img src="{{url('/assets/images/logo.png')}}" alt="" ></span>--}}
                                </a>
                            </h2>
                            {{--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>--}}
                        </div>
                        <div class="account-content">

                            @if($errors)
                                <p class="alert alert-danger center-block" ><span>{{$errors->first()}}</span></p>
                            @endif

                            <form class="form-horizontal" method="POST" action="{{url('/cc-admin/login-admin')}}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <input id="email" autocomplete="off" type="text" placeholder="Email / username" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                    <div class="col-md-12">
                                        <input id="password" autocomplete="off" placeholder="Password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group m-b-30">
                                    <div class="col-xs-12">
                                        <a href="#"><small>Forgotten my password</small></a>
                                    </div>
                                </div>
                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
                <!-- end wrapper -->
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset ('/assets/js/jquery.js') }}"></script>
<script src="{{ asset ('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset ('/assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset ('/assets/js/jquery.app.js') }}"></script>

</body>

</html>