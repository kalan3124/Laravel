@extends('home.index')
@section('Content')
    <div class="wrapper">
        <!-- =====  CONTAINER START  ===== -->
        <div class="container">
            <div class="row ">
                <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                    <!-- contact  -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel-login">
                                    <div class="panel-heading">
                                        <div class="row mb_20">
                                            <div class="col-xs-6">
                                                <a href="#" class="active" id="login-form-link">Login</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" id="register-form-link">Register</a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="login-form" action="/login" method="post">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Username" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                        <label for="remember"> Remember Me</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="text-center">
                                                                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                                </div>
                                                            </div>
                                                        </div><br><hr>
                                                    </div>
                                                    <div class="col-md-7">
                                                        @if(session()->has('error'))
                                                            <div class="alert alert-warning">
                                                                {{ session()->get('error') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </form>
                                                <form id="register-form" action="/register" method="post">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" value="">
                                                        @if ($errors->has('first_name'))
                                                            <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('first_name') }}</strong></span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="">
                                                        @if ($errors->has('last_name'))
                                                            <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('last_name') }}</strong></span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('email') }}</strong></span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password2" tabindex="2" class="form-control" placeholder="Password">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('password') }}</strong></span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                        @if ($errors->has('confirm-password'))
                                                            <span class="help-block alert-warning"><strong style="color: red;">{{ $errors->first('confirm-password') }}</strong></span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection