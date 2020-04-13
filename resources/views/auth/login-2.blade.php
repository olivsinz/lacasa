@extends('layouts.app')

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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
@endsection
