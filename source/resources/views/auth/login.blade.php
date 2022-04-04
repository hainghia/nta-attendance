@extends('layouts.main')
@section('head')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection
@section('content')
  <div id="auth">
    <div class="auth-content">
      <h1 class="auth-title">Welcome!</h1>
      <p class="auth-subtitle">We're so excited to see you!</p>
      <form method="POST" action="{{ route('login') }}" id="form">
        @csrf
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Username" id="email" name="email" value="{{ old('email') }}" data-parsley-trigger="change" required>

        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" autocomplete="current-password" data-parsley-trigger="change" required>
        </div>
        <div class="act">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
          </div>
          @if (Route::has('password.request'))
            <a class="forgot-password" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif
        </div>
        <div class="text-center">
          <button type="submit" class="btn login">Log in</button>
        </div>
      </form>
    </div>
  </div>
@endsection
@section('footer')
  <script>
    $('#form').parsley();
  </script>
@endsection
