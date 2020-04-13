@extends('layouts.app')

@section('title') Login @endsection

@section('content')

  <!-- pagheader start -->
<div class="pageheader">
<div class="container">
          <div class="row">
              <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="pageheader-caption">
                      <h1 class="pageheader-caption-title">Login Form</h1>
                      <p class="pageheader-caption-text">Bootstrap Login Examples. Nunc varius nibh nisl, ut rhoncus quam efficitur quis. Donec viverra tellus antonvallis eu. </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- pagheader close -->

  <!-- breadcrumb start -->
  <div class="container">
      <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
              <div class="custom-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active">Login</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
  <!-- breadcrumb close -->

  <div class="space-lg space-md space-xs">
      <div class="container">
          <div class="row">
              <div class="offset-xl-3 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                  <!-- login form start -->
                  <div class="login-form">
                      <div class="login-form-body">
                          <h4 class="login-form-title">Login</h4>
                          <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email') }}" aria-describedby="email" placeholder="example@gmail.com" autocomplete="email" required="" autofocus>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="password-field">Password</label>
                                  <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="current-password" placeholder="*************">
                                  <span toggle="#password-field" class="fa fa-fw fa-eye password-hide-icon showhidepassword"></span>
                                  {{-- <small>Must be 8-20 characters long.</small> --}}
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="login-remember-password-block">
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="rememberme"  name="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <label class="custom-control-label" for="rememberme">{{ __('Remember Me') }}</label>
                                  </div>
                                  <div class="forgot-password-link">
                                      <a href="{!! route('password.request') !!}"> Forgot Password?</a>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Login</button>
                          </form>
                      </div>
                      <div class="login-form-footer">
                          <p class="login-form-footer-text">Don’t have a Spacely account? <a href="{!! route('register') !!}">Create Account</a> and we’ll set you up so you can list your space.</p>
                      </div>
                  </div>
                  <!-- login form close -->
              </div>
          </div>
      </div>
  </div>
@endsection
