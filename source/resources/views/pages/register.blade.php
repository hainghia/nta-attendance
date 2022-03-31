@extends('layout.main')
@section('content')
  <div id="auth">

    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <div class="auth-logo">
            <a href="index.html"><img src="{{ asset('/assets/images/logo.svg') }}" alt="Logo"></a>
          </div>
          <h1 class="auth-title">Đăng ký</h1>
          <p class="auth-subtitle mb-5">Đăng ký hệ thông Nitro Tech Asia Attendace</p>
          @include('components.alert')
          <form id="form" action="{{ route('register.store') }}" method="POST">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="email" class="form-control form-control-xl" placeholder="Email" name="email" id="email" value="{{ old('email') }}" data-parsley-trigger="change" required>
              <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-xl" placeholder="Full Name" name="name" id="name" value="{{ old('name') }}" data-parsley-trigger="change" required>
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" id="password" value="{{ old('password') }}" data-parsley-trigger="change" required>
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" data-parsley-trigger="change" required>
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <div class="form-check form-check-lg">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="agree" id="agree" data-parsley-trigger="change" required>
                  <label class="form-check-label" for="agree">I agree to the <a href="#">terms</a></label>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
            @csrf
          </form>
          <div class="text-center mt-5 text-lg fs-4">
            <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}" class="font-bold">Login</a>.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
        </div>
      </div>
    </div>

  </div>
@endsection
@section('footer')
  <script src="{{ asset('assets/js/parsleylocalization/vn.js') }}"></script>
  <script>
    $('#form').parsley();
  </script>
@endsection
