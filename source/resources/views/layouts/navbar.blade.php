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
