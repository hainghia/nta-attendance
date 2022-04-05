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
            <p class="mb-4">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
            @if (session('status') == 'verification-link-sent')
              <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
              </div>
            @endif
            <div class="mt-4 flex items-center justify-between">
              <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div>
                  <x-jet-button type="submit">
                    {{ __('Resend Verification Email') }}
                  </x-jet-button>
                </div>
              </form>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                  {{ __('Log Out') }}
                </button>
              </form>
            </div>
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
