<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" ">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'Lacasa') }}</title>

    @yield('stylesheets')

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('assets/fonts/fontawesome/css/all.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/slick.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/slick-theme.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/flag-icon/flag-icon.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/owl.theme.default.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/theme-style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/select2/select2.min.css') !!}">

  </head>
  <body>

    @yield('body')

    <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('assets/js/bootstrap.bundle.js') !!}"></script>
    <script src="{!! asset('assets/js/main-js.js') !!}"></script>
    <script src="{!! asset('assets/select2/select2.full.min.js') !!}"></script>
    <script src="{!! asset('assets/select2/select2.min.js') !!}"></script>
    <script src="{!! asset('assets/js/slick.min.js') !!}"></script>
    <script src="{!! asset('assets/js/owl.carousel.min.js') !!}"></script>
  </body>
</html>
