{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!doctype html>
<html lang="en">
    
<!-- Mirrored from themesbrand.com/canvab/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 11:18:12 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>School Management System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{asset('master/assets/images/favicon.ico')}}">

        <!-- Basic Css files -->
        <link href="{{asset('master/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('master/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('master/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="sk-three-bounce">
                    <div class="sk-child sk-bounce1"></div>
                    <div class="sk-child sk-bounce2"></div>
                    <div class="sk-child sk-bounce3"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        {{-- <a href="index.html" class="logo logo-admin"><img src="{{asset('master/assets/images/logo-dark.png')}}" height="20" alt="logo">SMS</a> --}}
                    </h3>

                    <div class="p-3">
                        <h1 class="font-20 m-b-5 text-center ">School Management System</h1>

                        <form class="form-horizontal m-t-30" action="{{url('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="email" name="email" class="form-control" id="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                {{-- <div class="col-sm-6">
                                    <div class="custom-control mt-2 custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div> --}}
                                <div class="col-sm-12 ">
                                    <button class="btn btn-primary btn-block w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

           

        </div>



        <!-- jQuery  -->
        <script src="{{asset('master/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('master/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('master/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('master/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('master/assets/js/waves.js')}}"></script>
        <script src="{{asset('master/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('master/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('master/assets/js/app.js')}}"></script>

    </body>

<!-- Mirrored from themesbrand.com/canvab/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 11:18:13 GMT -->
</html>