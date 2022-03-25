<!DOCTYPE html>
<html lang="en">

<head>
  @include('private.layout.head')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">
  @include('private.layout.navbar')
  @include('private.layout.header')
  @yield('content')
  @include('private.layout.footer')
</body>
