@extends('public.layout.main')
@section('content')
  <!-- Services -->
  <div id="services" class="cards-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <!-- Card -->
          <div class="card">
            <div class="card-icon blue">
              <span class="far fa-file-alt"></span>
            </div>
            <div class="card-body">
              <h5 class="card-title">Landing page</h5>
              <p>Lorem ipsum dolor sit amet, consect adipiscing elit nulla id nisl blah nor</p>
              <ul class="list-unstyled li-space-lg">
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Ut tincidunt vitae enim non vehi</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Phasellus vitae metus in felis</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Fusce pulvinar eu mi ac molestie</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Curabitur consequat nisl eget</div>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of card -->

          <!-- Card -->
          <div class="card">
            <div class="card-icon yellow">
              <span class="fas fa-solar-panel"></span>
            </div>
            <div class="card-body">
              <h5 class="card-title">Corporate site</h5>
              <p>Nam eu erat tellused vivamus vitae sem in tortor pharetra vehicula orn</p>
              <ul class="list-unstyled li-space-lg">
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Vivaus dignissim sit amet nisi</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Aliqam a tristique nibh in pretium</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Nunc commodo magna quis blah</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Lacus fermentum tincidunt</div>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of card -->

          <!-- Card -->
          <div class="card">
            <div class="card-icon red">
              <span class="fas fa-gift"></span>
            </div>
            <div class="card-body">
              <h5 class="card-title">Online shop</h5>
              <p>Nullam lobortis porta diam, vitae dictum metus placerat luctus bora</p>
              <ul class="list-unstyled li-space-lg">
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Sed laoreet blandit mollis ne</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Mauris non luctus est quisquerm</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Mattis dapibus quisque tristique</div>
                </li>
                <li class="d-flex">
                  <i class="fas fa-check"></i>
                  <div class="flex-grow-1">Cursus lacus interdum sollicdn</div>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of card -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of cards-1 -->
  <!-- end of services -->


  <!-- Details 1 -->
  <div id="details" class="basic-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-7">
          <div class="image-container">
            <img class="img-fluid" src="images/details-1.svg" alt="alternative">
          </div> <!-- end of image-container -->
        </div> <!-- end of col -->
        <div class="col-lg-6 col-xl-5">
          <div class="text-container">
            <h2><span>Perfect solution</span><br> for your small business</h2>
            <p>Maecenas fringilla quam posuere, pellentesque est nec, gravida turpis. Integer vitae mollis felis. Integer id quam id tellus hendrerit laciniad binfer</p>
            <p>Sed id dui rutrum, dictum urna eu, accumsan turpis. Fusce id auctor velit, sed viverra dui rem dina</p>
            <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Modal</a>
          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of basic-1 -->
  <!-- end of details 1 -->


  <!-- Details Modal -->
  <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="row">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="col-lg-8">
            <div class="image-container">
              <img class="img-fluid" src="images/details-modal.jpg" alt="alternative">
            </div> <!-- end of image-container -->
          </div> <!-- end of col -->
          <div class="col-lg-4">
            <h3>Goals Setting</h3>
            <hr>
            <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper magna ac tum nico vela spider</p>
            <h4>User Feedback</h4>
            <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus posuere nisi. Vivamus feugiat</p>
            <ul class="list-unstyled li-space-lg">
              <li class="d-flex">
                <i class="fas fa-chevron-right"></i>
                <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
              </li>
              <li class="d-flex">
                <i class="fas fa-chevron-right"></i>
                <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
              </li>
              <li class="d-flex">
                <i class="fas fa-chevron-right"></i>
                <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
              </li>
              <li class="d-flex">
                <i class="fas fa-chevron-right"></i>
                <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
              </li>
              <li class="d-flex">
                <i class="fas fa-chevron-right"></i>
                <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
              </li>
            </ul>
            <a id="modalCtaBtn" class="btn-solid-reg" href="#">Details</a>
            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of modal-content -->
    </div> <!-- end of modal-dialog -->
  </div> <!-- end of modal -->
  <!-- end of details modal -->


  <!-- Details 2 -->
  <div class="counter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5">
          <div class="text-container">
            <h2><span>Awesome websites</span><br> built with tons of love</h2>
            <p>In gravida vitae nulla vitae tincidunt imperdiet ante. Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci flig rine bilo</p>

            <!-- Counter -->
            <div class="counter-container">
              <div class="counter-cell">
                <div data-purecounter-start="0" data-purecounter-end="1250" data-purecounter-duration="2" class="purecounter">1</div>
                <div class="counter-info">Happy Customers</div>
              </div> <!-- end of counter-cell -->
              <div class="counter-cell red">
                <div data-purecounter-start="0" data-purecounter-end="1380" data-purecounter-duration="2" class="purecounter">1</div>
                <div class="counter-info">Issues Solved</div>
              </div> <!-- end of counter-cell -->
            </div> <!-- end of counter-container -->
            <!-- end of counter -->

          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
        <div class="col-lg-6 col-xl-7">
          <div class="image-container">
            <img class="img-fluid" src="images/details-2.svg" alt="alternative">
          </div> <!-- end of image-container -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of counter -->
  <!-- end of details 2 -->


  <!-- Projects -->
  <div id="projects" class="filter bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2-heading">Projects that we're proud of</h2>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-lg-12">

          <!-- Filter -->
          <div class="button-group filters-button-group">
            <button class="button is-checked" data-filter="*">ALL</button>
            <button class="button" data-filter=".design">DESIGN</button>
            <button class="button" data-filter=".development">DEVELOPMENT</button>
            <button class="button" data-filter=".marketing">MARKETING</button>
          </div> <!-- end of button group -->
          <div class="grid">
            <div class="element-item development">
              <a href="article.html">
                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
                <p><strong>Online banking</strong> - pellentesque tincidunt leo eu laoreedt integer quis vanos compren</p>
              </a>
            </div>
            <div class="element-item development">
              <a href="article.html">
                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
                <p><strong>Loans company</strong> - odio semper, interdum orci molestie, mattis lectus pellentesq aliqu</p>
              </a>
            </div>
            <div class="element-item development">
              <a href="article.html">
                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
                <p><strong>Refinance firm</strong> - arcu a neque congue finibus doneci malesuada et purus melan bris</p>
              </a>
            </div>
            <div class="element-item design development">
              <a href="article.html">
                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
                <p><strong>Financial products</strong> - id aliquam ut malesuada eros utr varius blandit aliquam tinci bist</p>
              </a>
            </div>
            <div class="element-item design development">
              <a href="article.html">
                <img class="img-fluid" src="images/project-5.jpg" alt="alternative">
                <p><strong>Credit cards</strong> - magna a feugiat cras a semper tellus in rhoncus vehicula tellus rugo</p>
              </a>
            </div>
            <div class="element-item design marketing">
              <a href="article.html">
                <img class="img-fluid" src="images/project-6.jpg" alt="alternative">
                <p><strong>Software robots</strong> - vel sodales dolor donec a est sapien integer pharetr bilom conva</p>
              </a>
            </div>
            <div class="element-item design marketing">
              <a href="article.html">
                <img class="img-fluid" src="images/project-7.jpg" alt="alternative">
                <p><strong>Company control</strong> - ut quam aliquam elemo de vestibulum fringilla porttitor vanic tres</p>
              </a>
            </div>
            <div class="element-item design marketing">
              <a href="article.html">
                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
                <p><strong>Audit reports</strong> - sed tempor, metus vel pharetra finibus, est ante hendrerit augue</p>
              </a>
            </div>
            <div class="element-item design marketing">
              <a href="article.html">
                <img class="img-fluid" src="images/project-9.jpg" alt="alternative">
                <p><strong>Big business</strong> - aliquam semper molestie nisi, at porttitor lacus suscipit in mole richter</p>
              </a>
            </div>
          </div> <!-- end of grid -->
          <!-- end of filter -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of filter -->
  <!-- end of projects -->


  <!-- Testimonials -->
  <div class="slider-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <!-- Card Slider -->
          <div class="slider-container">
            <div class="swiper-container card-slider">
              <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                  <div class="card">
                    <img class="quotes" src="images/quotes.svg" alt="alternative">
                    <div class="card-body">
                      <p class="testimonial-text">Fusce tincidunt dui nec diam varius venenatis. Nullam tristique rutrum odio, ut tincidunt erat dictum in. Etiam et aliquet mi, et vehicula elit fusce porta ullamcorper</p>
                      <div class="details">
                        <img class="testimonial-image" src="images/testimonial-1.jpg" alt="alternative">
                        <div class="text">
                          <div class="testimonial-author">Samantha Bloom</div>
                          <div class="occupation">Team Leader - Syncnow</div>
                        </div> <!-- end of text -->
                      </div> <!-- end of testimonial-details -->
                    </div>
                  </div>
                </div> <!-- end of swiper-slide -->
                <!-- end of slide -->

                <!-- Slide -->
                <div class="swiper-slide">
                  <div class="card">
                    <img class="quotes" src="images/quotes.svg" alt="alternative">
                    <div class="card-body">
                      <p class="testimonial-text">Mauris ut mattis nisl. Nunc ultrices nisi eget nisl pulvinar iaculis vitae ac nulla. Nullam fringilla varius blandit. Nam sit amet eleifend justo blogo rovan de chichis kokos venir dab</p>
                      <div class="details">
                        <img class="testimonial-image" src="images/testimonial-2.jpg" alt="alternative">
                        <div class="text">
                          <div class="testimonial-author">Mike Page</div>
                          <div class="occupation">Developer - Chainlink</div>
                        </div> <!-- end of text -->
                      </div> <!-- end of testimonial-details -->
                    </div>
                  </div>
                </div> <!-- end of swiper-slide -->
                <!-- end of slide -->

                <!-- Slide -->
                <div class="swiper-slide">
                  <div class="card">
                    <img class="quotes" src="images/quotes.svg" alt="alternative">
                    <div class="card-body">
                      <p class="testimonial-text">Nam sit amet eleifend justo. Aliquam sit amet lacinia enim, eget facilisis ex. Ut pretium cursus eleifend. Integer feugiat malesuada quam vel basil venis proca jilo</p>
                      <div class="details">
                        <img class="testimonial-image" src="images/testimonial-3.jpg" alt="alternative">
                        <div class="text">
                          <div class="testimonial-author">Mary Longhorn</div>
                          <div class="occupation">Manager - Firstdev</div>
                        </div> <!-- end of text -->
                      </div> <!-- end of testimonial-details -->
                    </div>
                  </div>
                </div> <!-- end of swiper-slide -->
                <!-- end of slide -->

                <!-- Slide -->
                <div class="swiper-slide">
                  <div class="card">
                    <img class="quotes" src="images/quotes.svg" alt="alternative">
                    <div class="card-body">
                      <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur ing elit. Nulla id nisl tempus risus facilisis efficr ut tincidunt vitae enim non vehicula. Phases vitae metus in felis gravida ultrices zimbo</p>
                      <div class="details">
                        <img class="testimonial-image" src="images/testimonial-4.jpg" alt="alternative">
                        <div class="text">
                          <div class="testimonial-author">Ronny Drummer</div>
                          <div class="occupation">Designer - Sawdust</div>
                        </div> <!-- end of text -->
                      </div> <!-- end of testimonial-details -->
                    </div>
                  </div>
                </div> <!-- end of swiper-slide -->
                <!-- end of slide -->

              </div> <!-- end of swiper-wrapper -->

              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <!-- end of add arrows -->

            </div> <!-- end of swiper-container -->
          </div> <!-- end of slider-container -->
          <!-- end of card slider -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of slider-1 -->
  <!-- end of testimonials -->


  <!-- Pricing -->
  <div id="pricing" class="cards-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2-heading"><span>Choose the package</span><br> that fits your budget and project</h2>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-lg-12">

          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Landing page</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
              </div>
              <ul class="list-unstyled li-space-lg">
                <li>Fusce pulvinar eu mi acm</li>
                <li>Curabitur consequat nisl bro</li>
                <li>Reget facilisis molestie</li>
                <li>Vivamus vitae sem in tortor</li>
                <li>Pharetra vehicula ornares</li>
                <li>Vivamus dignissim sit amet</li>
                <li>Ut convallis aliquama set</li>
              </ul>
              <div class="price">$200</div>
              <a href="#contact" class="btn-outline-reg">Get quote</a>
            </div>
          </div>
          <!-- end of card -->

          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Corporate site</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
              </div>
              <ul class="list-unstyled li-space-lg">
                <li>Nunc commodo magna quis</li>
                <li>Lacus fermentum tincidunt</li>
                <li>Nullam lobortis porta diam</li>
                <li>Announcing of invita mro</li>
                <li>Dictum metus placerat luctus</li>
                <li>Sed laoreet blandit mollis</li>
                <li>Mauris non luctus est</li>
              </ul>
              <div class="price">$300</div>
              <a href="#contact" class="btn-outline-reg">Get quote</a>
            </div>
          </div>
          <!-- end of card -->

          <!-- Card -->
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <img class="decoration-lines" src="images/decoration-lines.svg" alt="alternative"><span>Online shop</span><img class="decoration-lines flipped" src="images/decoration-lines.svg" alt="alternative">
              </div>
              <ul class="list-unstyled li-space-lg">
                <li>Quisque rutrum mattis</li>
                <li>Quisque tristique cursus lacus</li>
                <li>Interdum sollicitudin maec</li>
                <li>Quam posuere, pellentesque</li>
                <li>Est nec, gravida turpis integer</li>
                <li>Mollis felis. Integer id quam</li>
                <li>Id tellus hendrerit lacinia</li>
              </ul>
              <div class="price">$400</div>
              <a href="#contact" class="btn-outline-reg">Get quote</a>
            </div>
          </div>
          <!-- end of card -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of cards-2 -->
  <!-- end of pricing -->


  <!-- Invitation -->
  <div class="basic-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-container">
            <h4>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper magna rico</h4>
            <p class="p-large">Ac tristique velit sapien vitae eros. Praesent ut erat a tellus cursus pharetra finibus posuere nisi. Vivamus feugiat tincidunt sem pre toro</p>
          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of basic-2 -->
  <!-- end of invitation -->


  <!-- Contact -->
  <div id="contact" class="form-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="h2-heading"><span>Use the following form to</span><br> request a quote for your project</h2>
          <p class="p-heading">Vel malesuada sapien condimentum nec. Fusce interdum nec urna et finibus pulvinar tortor id</p>
          <ul class="list-unstyled li-space-lg">
            <li><i class="fas fa-map-marker-alt"></i> &nbsp;22 Praesentum, Pharetra Fin, CB 12345, KL</li>
            <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">+81 720 2212</a></li>
            <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:lorem@ipsum.com">lorem@ipsum.com</a></li>
          </ul>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-lg-10 offset-lg-1">

          <!-- Contact Form -->
          <form>
            <div class="form-group">
              <input type="text" class="form-control-input" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control-input" placeholder="Email" required>
            </div>
            <div class="form-group">
              <select class="form-control-select" required>
                <option class="select-option" value="" disabled selected>Project type</option>
                <option class="select-option" value="Company Website">Company Website</option>
                <option class="select-option" value="Landing Page">Landing Page</option>
                <option class="select-option" value="Online Shop">Online Shop</option>
              </select>
            </div>
            <div class="form-group">
              <textarea class="form-control-textarea" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control-submit-button">Submit</button>
            </div>
          </form>
          <!-- end of contact form -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of form-1 -->
  <!-- end of contact -->
@endsection