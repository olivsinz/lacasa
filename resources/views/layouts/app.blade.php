@extends('base')

@section('title') @endsection

@section('body')

  <div class="preloader">
      <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
      </div>
  </div>

  <div class="main-wrapper">
  <!-- header -->
  @include('includes.header')

  @yield('content')

  @include('includes.footer')
  </div>

@endsection
