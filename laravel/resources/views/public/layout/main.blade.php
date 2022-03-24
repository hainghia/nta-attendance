<!DOCTYPE html>
<html lang="en">

<head>
  @include('public.layout.head')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">
  @include('public.layout.header')
  @yield('content')
  @include('public.layout.footer')
</body>
