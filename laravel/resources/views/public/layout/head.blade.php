<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $title }}</title>
<link rel="shortcut icon" href="{{ asset('/favicon.svg') }}" type="image/svg+xml">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
<link rel="stylesheet" href="{{ asset('vendor/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('assets/public/css/style.min.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="css/styles.css" rel="stylesheet">
@yield('head')
