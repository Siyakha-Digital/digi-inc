@extends('layouts.app')
@section('content')
<div class="login-wrapper">
    <div class="login-content">
        <form action="signin.html">
            <div class="login-userset">
                <div class="login-logo">
                    <img src="https://radapps.co.za/digiinc/images/digi-inc-logo-01.png" class="img-fluid" alt="img">
                </div>
                <div class="login-card">
                    <div class="login-heading">
                        <h3>Hi, Welcome!</h3>
                        <p>Register to get access to Digi Inc</p>
                    </div>
                    <div class="form-wrap form-focus">
                        <span class="form-icon">
                            <i class="feather-user"></i>
                        </span>
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Name *</label>
                    </div>
                    <div class="form-wrap form-focus">
                        <span class="form-icon">
                            <i class="feather-mail"></i>
                        </span>
                        <input type="email" class="form-control floating">
                        <label class="focus-label">Email</label>
                    </div>
                    <div class="form-wrap form-focus pass-group">
                        <span class="form-icon">
                            <i class="toggle-password feather-eye-off"></i>
                        </span>
                        <input type="password" class="pass-input form-control  floating">
                        <label class="focus-label">Password</label>
                    </div>
                    <div class="form-wrap form-focus pass-group">
                        <span class="form-icon">
                            <i class="toggle-password-confirm feather-eye-off"></i>
                        </span>
                        <input type="password" class="pass-confirm form-control  floating">
                        <label class="focus-label">Confirm Password</label>
                    </div>
                    <div class="form-wrap">
                        <label class="custom_check mb-0">By login you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            <input type="checkbox" name="remeber">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <div class="login-or">
                        <span class="span-or">or sign up with</span>
                    </div>
                    <ul class="login-social-link">
                        <li>
                            <a href="javascript:void(0);">
                                <img src="assets/img/icons/google-icon.svg" alt="Facebook"> Google
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="assets/img/icons/fb.svg" alt="Google"> Facebook
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="acc-in">
                    <p>Already have an account? <a href="signin.html">Sign In</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@include('components.footer')
@endsection
