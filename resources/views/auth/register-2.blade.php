@extends('layouts.app')

@section('title')
{{ __('Register') }}
@endsection

@section('content')
  <!-- pageheader start -->
  <div class="pageheader">
      <div class="container">
          <div class="row">
              <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="pageheader-caption">
                    <h1 class="pageheader-caption-title">Register Form</h1>
                    <p class="pageheader-caption-text">Bootstrap Register Examples. Nunc varius nibh nisl, ut rhoncus quam efficitur quis. Donec viverra tellus anlis eu. </p>
                </div>
              </div>
          </div>
      </div>
  </div>
  <!-- pageheader close -->

  <!-- breadcrumb start -->
  <div class="container">
      <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
              <div class="custom-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active">Register</li>
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
                  <!-- register start -->
                  <div class="register-form">
                      <div class="register-form-body">
                          <h4 class="register-form-title">{{ __('Register') }}</h4>
                          <form method="POST" action="{{ route('register') }}">
                              @csrf
                              <div class="form-group">
                                  <label for="name">{{ __('Name') }}</label>
                                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="email">{{ __('E-Mail Address') }}</label>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" placeholder="example@gmail.com" value="{{ old('email') }}" required autocomplete="email">
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="password-field">{{ __('Password') }}</label>
                                  <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" required placeholder="*************">
                                  <span toggle="#password-field" class="fa fa-fw fa-eye password-hide-icon showhidepassword"></span>
                                  <small>Must be 8-20 characters long.</small>
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>

                              {{-- <div class="form-group row">
                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  </div>
                              </div> --}}

                              <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                          </form>
                          <div class="register-remember-password-block">
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                  <label class="custom-control-label" for="rememberme">Remember Me</label>
                              </div>

                          </div>
                      </div>
                      <div class="register-form-footer">
                          <p class="register-form-footer-text">Already have an account? <a href="login-page.html"> Log in</a> </p>
                      </div>
                  </div>
                  <!-- register close -->
              </div>
          </div>
      </div>
  </div>



      <div class="space-lg space-md space-xs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="names" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="names" type="text" class="form-control @error('name') is-invalid @enderror" name="names" value="{{ old('names') }}" required autocomplete="names" autofocus>

                                        @error('names')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="text" name="zert" value="fzjdfezhze">

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection
