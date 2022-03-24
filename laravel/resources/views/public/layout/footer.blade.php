<!-- Footer -->
<div class="footer bg-gray">
  <img class="decoration-city" src="images/decoration-city.svg" alt="alternative">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4>Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci ut pellentes troc</h4>
        <div class="social-container">
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-pinterest-p fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-youtube fa-stack-1x"></i>
            </a>
          </span>
        </div> <!-- end of social-container -->
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled li-space-lg p-small">
          <li><a href="article.html">Article Details</a></li>
          <li><a href="terms.html">Terms & Conditions</a></li>
          <li><a href="privacy.html">Privacy Policy</a></li>
        </ul>
      </div> <!-- end of col -->
      <div class="col-lg-3">
        <p class="p-small statement">Copyright © <a href="#">Your name</a></p>
      </div> <!-- end of col -->
      <div class="col-lg-3">
        <p class="p-small statement">Distributed By: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
      </div> <!-- end of col -->
    </div> <!-- enf of row -->
  </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
  <img src="images/up-arrow.png" alt="alternative">
</button>
<!-- end of back to top button -->

<!-- Scripts -->
<script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
<script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
<script src="js/scripts.js"></script> <!-- Custom scripts -->


<script src="{{ asset('vendor/js/admin.js') }}"></script>
<script src="{{ asset('assets/admin/js/main.js') }}"></script>
@yield('footer')
