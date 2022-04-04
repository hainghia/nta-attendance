@extends('layouts.main')
@section('head')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection
@section('content')
  <div class="container" id="home">
    @include('layouts.navbar')
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
