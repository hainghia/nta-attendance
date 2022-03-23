<meta charset="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<link rel="stylesheet" href="{{ asset('vendor/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/css/pages/auth.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
<link rel="shortcut icon" href="{{ asset('/favicon.svg') }}" type="image/svg+xml">
<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" sizes="any">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@yield('head')
