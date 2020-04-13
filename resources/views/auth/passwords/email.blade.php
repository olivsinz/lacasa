@extends('layouts.app')

@section('title') {{ __('Reset Password') }} @endsection

@section('content')
<div class="pageheader">
     <div class="container">
           <div class="row">
               <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="pageheader-caption">
                       <h1 class="pageheader-caption-title">Forgot Password </h1>
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
                        <li class="breadcrumb-item active">Forgot Password</li>
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
                <!-- forgot start -->
                <div class="forget-form">
                    <div class="forget-form-body">
                        <h4 class="forget-form-title">Forgot your password?</h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email" value="{{ old('email') }}" placeholder="example@gmail.com" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- forgot close -->
    </div>
</div>
@endsection
