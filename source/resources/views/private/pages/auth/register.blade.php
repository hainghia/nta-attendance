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
            <h4 class="mb-2">Adventure starts here 🚀</h4>
            <p class="mb-4">Make your app management easy and fun!</p>

            <form id="form" class="mb-3" method="POST" action="{{ route('register') }}">
              @csrf

              <div class="mb-3">
                <label for="name" class="form-label" value="{{ __('Name') }}">Full Name</label>
                <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Full name" autofocus data-parsley-trigger="change" required />
              </div>

              <div class="mb-3">
                <label for="email" class="form-label" value="{{ __('Email') }}">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email or username" data-parsley-trigger="change" required />
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password" value="{{ __('Password') }}">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" data-parsley-trigger="change" required autocomplete="current-password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password_confirmation" value="{{ __('Password Confirmation') }}">Password Confirmation</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" data-parsley-trigger="change" required autocomplete="current-password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms" name="terms" />
                    <label class="form-check-label" for="terms">
                      {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                    </label>
                  </div>
                </div>
              @endif
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Sign up') }}</button>
              </div>
            </form>
            <p class="text-center">
              <span>Already have an account?</span>
              <a href="{{ route('login') }}">
                <span>Sign in instead</span>
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
