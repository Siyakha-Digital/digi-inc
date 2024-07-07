@extends('layouts.app')
@section('content')
<div class="login-wrapper">
<div class="login-content">
<form action="index.html">
<div class="login-userset">
<div class="login-logo">
<img src="assets/img/logo.svg" alt="img">
</div>
<div class="login-card">
<div class="login-heading">
<h3>Hi, Welcome Back!</h3>
<p>Fill the fields to get into your account</p>
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
<div class="row">
<div class="col-md-6">
<div class="form-wrap">
<label class="custom_check mb-0">Remember Me
<input type="checkbox" name="remeber">
<span class="checkmark"></span>
</label>
</div>
</div>
<div class="col-md-6">
<div class="form-wrap text-md-end">
<a href="forgot-password.html" class="forgot-link">Forgot Password?</a>
</div>
</div>
</div>
<div class="form-wrap mantadory-info d-none">
<p><i class="feather-alert-triangle"></i>Fill all the fields to submit</p>
</div>
<button type="submit" class="btn btn-primary">Sign In</button>
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
<p>Don’t have an account? <a href="signup.html">Sign Up</a></p>
</div>
</div>
</form>
</div>
</div>
@endsection