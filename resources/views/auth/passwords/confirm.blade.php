@extends('layouts.app')

@section('title') {{ __('Confirm Password') }} @endsection

@section('content')
  <div class="pageheader">
       <div class="container">
             <div class="row">
                 <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="pageheader-caption">
                         <h1 class="pageheader-caption-title">{{ __('Confirm Password') }} </h1>
                         <p class="pageheader-caption-text">Lorem ipsum dolor sit amet, consecteturconsectetur adipiscing eliorbi fringilla ipsum tellusa varius loremid blandit adipiscing varius loremid blandit . </p>
                     </div>
                 </div>
             </div>
         </div>
  </div>
  <!-- pageheader close -->

  <div class="container">
      <div class="row">
          <!-- breadcrumb start -->
          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
              <div class="custom-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active">{{ __('Confirm Password') }}</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <!-- breadcrumb close -->
      </div>
  </div>

<div class="space-lg space-md space-xs">
  <div class="container">
    <div class="row">
        <div class="offset-xl-3 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="forget-form">
            <div class="forget-form-body">
              <h4 class="forget-form-title">{{ __('Confirm Password') }}</h4>

              {{ __('Please confirm your password before continuing.') }}

              <form method="POST" action="{{ route('password.confirm') }}">
                  @csrf

                  <div class="form-group">
                      <label for="password">{{ __('Password') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="password" name="password" required placeholder="************" autocomplete="current-password" autofocus>

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">{{ __('Confirm Password') }}</button>
              </form>
              <div class="">

                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
@endsection
