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
                              <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                  <div class="form-group">
                                      <label for="firstname">{{ __('First name') }}</label>
                                      <input  id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" aria-describedby="firstname" name="firstname" placeholder="{{ __('First name') }}" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                      @error('firstname')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                  <div class="form-group">
                                      <label for="lastname">{{ __('Last name') }}</label>
                                      <input  id="lastname" type="text" class="form-control @error('name') is-invalid @enderror" aria-describedby="lastname" name="lastname" placeholder="{{ __('Last name') }}" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                      @error('lastname')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                  <label for="email">{{ __('E-Mail Address') }}</label>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email" placeholder="example@gmail.com" value="{{ old('email') }}" required autocomplete="email">
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
                      </div>
                      <div class="register-form-footer">
                          <p class="register-form-footer-text">Already have an account? <a href="{!! route('login') !!}"> Log in</a> </p>
                      </div>
                  </div>
                  <!-- register close -->
              </div>
          </div>
      </div>
  </div>

@endsection
