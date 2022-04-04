<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('/favicon.svg') }}" type="image/svg+xml">
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" sizes="any">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <link rel="stylesheet" href="{{ asset('assets/css/root.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('head')
</head>

<body id="app">

  {{-- Main Content --}}
  @yield('content')

  {{-- Script --}}
  <script src="{{ asset('assets/js/app.js') }}"></script>
  @yield('footer')
</body>

</html>
