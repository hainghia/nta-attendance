@extends('private.layouts.main')
@section('head')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/page-auth.css') }}">
@endsection
@section('content')
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <a href="{{ URL::to('/') }}" class="icon" height="80">{!! \App\Helpers\Helper::fetch_svg_icon('logo-doc') !!}</a>
                </span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome</h4>
            <p class="mb-4">Please sign-in to your account and start the adventure</p>

            <form id="form" class="mb-3" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label" value="{{ __('Email') }}">Email or Username</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email or username" autofocus data-parsley-trigger="change" required />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password" value="{{ __('Password') }}">Password</label>
                  @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                    </a>
                  @endif
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" data-parsley-trigger="change" required autocomplete="current-password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember" name="remember" />
                  <label class="form-check-label" for="remember-me" {{ __('Remember me') }}> Remember Me </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Log in') }}</button>
              </div>
            </form>

            <p class="text-center">
              <span>New on our platform?</span>
              <a href="auth-register-basic.html">
                <span>Create an account</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('footer')
  <script src="{{ asset('assets/js/parsleyjs/parsley.min.js') }}"></script>
  <script>
    $('#form').parsley();
  </script>
@endsection
