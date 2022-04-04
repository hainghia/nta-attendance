@extends('layouts.main')
@section('head')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection
@section('content')
  <div class="container" id="home">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL::to('/') }}">
          <img src="{{ asset('images/logo-desktop.svg') }}" class="logo" alt="" width="300">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="#">About Us</a>
            <a class="nav-link" href="{{ URL::to('/login') }}">Login</a>
            <a class="nav-link" href="{{ URL::to('/register') }}">Register</a>
            <a class="nav-link btn-warning" href="#">Try Web version</a>
          </div>
        </div>
      </div>
    </nav>
    <main class="main row">
      <div class="col col-5 content">
        <h1 class="title">Why Wait to Connect with your colleagues?</h1>
        <p>Now its easy to join your colleagues & friends with NitroTechAsia App. Download and connect seemlessly with anyone in the workspace. </p>
        <div class="download">
          <a href="#" class="icon" height="80">{!! \App\Helpers\Helper::fetch_svg_icon('chplay') !!}</a>
          <a href="#" class="icon" height="80">{!! \App\Helpers\Helper::fetch_svg_icon('appstore') !!}</a>
        </div>
      </div>
      <div class="rol col-7">
        <div class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/backroud-desktop.png') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/backroud-desktop.png') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/backroud-desktop.png') }}" class="d-block w-100" alt="">
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
@endsection
