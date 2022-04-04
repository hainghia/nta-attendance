@extends('layouts.main')
@section('head')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection
@section('content')
  <div id="auth">
    <div class="auth-content">
      <h1 class="auth-title">Welcome!</h1>
      <p class="auth-subtitle">We're so excited to see you!</p>
      <form method="POST" action="{{ route('register') }}" id="form">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{ old('name') }}" data-parsley-trigger="change" required autofocus autocomplete="name">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}" data-parsley-trigger="change" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" data-parsley-trigger="change" required autocomplete="new-password">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password Confirmation" id="password_confirmation" name="password_confirmation" data-parsley-trigger="change" required autocomplete="new-password">
        </div>
        <div class="act">
          <a class="forgot-password" href="{{ route('login') }}">{{ __('Login') }}</a>
          @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
              <x-jet-label for="terms">
                <div class="flex items-center">
                  <x-jet-checkbox name="terms" id="terms" />

                  <div class="ml-2">
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                  </div>
                </div>
              </x-jet-label>
            </div>
          @endif
        </div>
        <div class="text-center">
          <button type="submit" class="btn registe">Registe</button>
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
