<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/test/private/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" href="{{ asset('/favicon.svg') }}" type="image/svg+xml">
  <title>{{ config('app.name', 'Nitro Tech Asia') }} | {{ $title }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('assets/private/vendor/fonts/boxicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/private/vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('assets/private/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('assets/private/css/demo.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/private/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/private/vendor/libs/apex-charts/apex-charts.css') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('head')
</head>

<body id="app">

  {{-- Main Content --}}
  @yield('content')

  {{-- Script --}}
  <script src="{{ asset('assets/private/vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('assets/private/js/config.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('assets/private/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/private/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/private/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/private/vendor/js/menu.js') }}"></script>
  <script src="{{ asset('assets/private/vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ asset('assets/private/js/main.js') }}"></script>
  <script src="{{ asset('assets/private/js/dashboards-analytics.js') }}"></script>
  <script async defer src="{{ asset('https://buttons.github.io/buttons.js') }}"></script>
  @yield('footer')
</body>

</html>
