@extends('frontend.layouts.master')

@section('title')
    Patient Login
@endsection

@section('body-class')
    account-page
@endsection



@section('content')
<div class="content">
    <div class="container-fluid">
                    
        <div class="row">
            <div class="col-md-8 offset-md-2">

                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="/assets/frontend/img/login-banner.png" class="img-fluid" alt="Doccure Login">   
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Login <span>Doccure</span></h3>
                                </div>
                                <form action="{{ route('patient.login_go') }}" method="POST">
                                    @csrf()
                                    <div class="form-group form-focus">
                                        <input type="number" name="mobile" class="form-control floating">
                                        <label class="focus-label">Mobile</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" name="password" class="form-control floating">
                                        <label class="focus-label">Password</label>
                                    </div>

                                    <div class="form-group">
                                        <input class="remember" id="remember" type="checkbox" name="remember">
                                        <label class="text-dark" for="remember">Remember Me</label>
                                    </div>

                                    <div class="text-right">
                                        <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="row form-row social-login">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                        </div>
                                    </div>
                                    <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->

                </form>
                    
            </div>
        </div>

    </div>
</div>
@endsection