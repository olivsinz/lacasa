@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
  <div class="">

      <!-- navbar section  -->

      <!-- heroslide start -->
      <div class="hero-slide">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12  order-lg-0 order-sm-2">
                      <!-- search area start -->
                      <div class="hero-search-area">
                          <div class="hero-search-area-caption">
                              <h1 class="hero-search-area-caption-title">Revolutionize your
                                  workspace</h1>
                              <p class="hero-search-area-caption-text">Book from thousands of unique work and meeting spaces.</p>
                          </div>
                          <!-- search area start -->
                          <div class="hero-search-area-form">
                              <form class="form-row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <select class="select2 form-control custom-select">
                                          <option>Search By Location</option>
                                          <option value="United States">United States</option>
                                          <option value="United Kingdom">United Kingdom</option>
                                          <option value="Afghanistan">Afghanistan</option>
                                          <option value="Aland Islands">Aland Islands</option>
                                          <option value="Albania">Albania</option>
                                          <option value="Algeria">Algeria</option>
                                          <option value="American Samoa">American Samoa</option>
                                          <option value="Andorra">Andorra</option>
                                          <option value="Angola">Angola</option>
                                          <option value="Anguilla">Anguilla</option>
                                          <option value="Antarctica">Antarctica</option>
                                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                          <option value="Argentina">Argentina</option>
                                          <option value="Armenia">Armenia</option>
                                          <option value="Aruba">Aruba</option>
                                          <option value="Australia">Australia</option>
                                          <option value="Austria">Austria</option>
                                          <option value="Azerbaijan">Azerbaijan</option>
                                          <option value="Bahamas">Bahamas</option>
                                          <option value="Bahrain">Bahrain</option>
                                          <option value="Bangladesh">Bangladesh</option>
                                          <option value="Barbados">Barbados</option>
                                          <option value="Belarus">Belarus</option>
                                          <option value="Belgium">Belgium</option>
                                          <option value="Belize">Belize</option>
                                          <option value="Benin">Benin</option>
                                          <option value="Bermuda">Bermuda</option>
                                          <option value="Bhutan">Bhutan</option>
                                      </select>
                                  </div>
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <select class="select2 form-control custom-select">
                                          <option>All Space</option>
                                          <option value="United States">Meeting Space</option>
                                          <option value="United Kingdom">Coworking Space</option>
                                          <option value="Afghanistan">Office space</option>
                                          <option value="Aland Islands">Retail Space</option>
                                          <option value="Albania">Event Space</option>
                                          <option value="Algeria">Virtual Office</option>
                                      </select>
                                  </div>
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <a href="#" class="btn btn-secondary">Search</a>
                                  </div>
                              </form>
                          </div>
                          <!-- search area close -->
                      </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                      <!-- hero slider start -->
                      <div class="hero-slider">
                          <div class="hero-slider-item">
                              <img src="assets/images/slide-img-1.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="hero-slider-item">
                              <img src="assets/images/slide-img-2.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="hero-slider-item">
                              <img src="assets/images/slide-img-3.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                      </div>
                      <!-- hero slider close -->
                  </div>
              </div>
          </div>
      </div>
      <div class="space-lg space-md space-xs">
          <div class="container-fluid">
              <div class="row">
                  <!-- section heading start -->
                  <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="section-heading text-center">
                          <h2 class="section-heading-title">Types of office space available </h2>
                          <p class="section-heading-text lead">Explore the different types of office space availableto rentand discover <br> which is right for your business.</p>
                      </div>
                  </div>
                  <!-- section heading close -->
              </div>
              <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                      <!-- showcase start -->
                      <a href="listing-single.html" class="space-showcase-block">
                          <div class="space-showcase-img zoom-img">
                              <img src="assets/images/space-img-1.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="space-showcase-content">
                              <h3 class="space-showcase-content-title">Meeting space</h3>
                          </div>
                      </a>
                      <!-- showcase close -->
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                      <!-- showcase start -->
                      <a href="listing-single.html" class="space-showcase-block">
                          <div class="space-showcase-img zoom-img">
                              <img src="assets/images/space-img-2.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="space-showcase-content">
                              <h3 class="space-showcase-content-title">Coworking space</h3>
                          </div>
                      </a>
                      <!-- showcase close -->
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                      <!-- showcase start -->
                      <a href="listing-single.html" class="space-showcase-block">
                          <div class="space-showcase-img zoom-img">
                              <img src="assets/images/space-img-3.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="space-showcase-content">
                              <h3 class="space-showcase-content-title">Office space</h3>
                          </div>
                      </a>
                      <!-- showcase close -->
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                      <!-- showcase start -->
                      <a href="listing-single.html" class="space-showcase-block">
                          <div class="space-showcase-img zoom-img">
                              <img src="assets/images/space-img-4.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="space-showcase-content">
                              <h3 class="space-showcase-content-title">Retail space</h3>
                          </div>
                      </a>
                      <!-- showcase close -->
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                      <!-- showcase start -->
                      <a href="listing-single.html" class="space-showcase-block">
                          <div class="space-showcase-img zoom-img">
                              <img src="assets/images/space-img-5.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="space-showcase-content">
                              <h3 class="space-showcase-content-title">Event space</h3>
                          </div>
                      </a>
                      <!-- showcase close -->
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                      <!-- showcase start -->
                      <a href="listing-single.html" class="space-showcase-block">
                          <div class="space-showcase-img zoom-img">
                              <img src="assets/images/space-img-6.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </div>
                          <div class="space-showcase-content">
                              <h3 class="space-showcase-content-title">Virtual office</h3>
                          </div>
                      </a>
                      <!-- showcase close -->
                  </div>
              </div>
          </div>
      </div>
      <div class="space-lg space-md space-xs bg-light rounded">
          <div class="container">
              <div class="row">
                  <!-- section heading start -->
                  <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="section-heading text-center">
                          <h2 class="section-heading-title">How it Works?</h2>
                          <p class="section-heading-text lead">Aliquam sagittis consectetur ligulan aliquam turpis cursus at. In aliquet augue nec libero ultricies velit pellentesque.</p>
                      </div>
                  </div>
                  <!-- section heading close -->
              </div>
              <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <!-- process block start  -->
                      <div class="process-block">
                          <div class="process-block-number">1</div>
                          <div class="process-content">
                              <div class="process-content-icon">
                                  <img src="assets/images/location-map.png" alt="spacely realtor directory listing bootstrap template">
                              </div>
                              <h3 class="process-content-title">List your space</h3>
                              <p>It takes no longer than 15 minutes to list your space on spacely. Our user friendly onboarding process! </p>
                          </div>
                      </div>
                      <!-- process block close -->
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <!-- process block start  -->
                      <div class="process-block">
                          <div class="process-block-number">2</div>
                          <div class="process-content">
                              <div class="process-content-icon">
                                  <img src="assets/images/graph-icon.png" alt="spacely realtor directory listing bootstrap template">
                              </div>
                              <h3 class="process-content-title">Get more orders</h3>
                              <p>Right after you complete the onboarding process, we will publish your workspace on our marketplace. </p>
                          </div>
                      </div>
                      <!-- process block close  -->
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <!-- process block start  -->
                      <div class="process-block">
                          <div class="process-block-number">3</div>
                          <div class="process-content">
                              <div class="process-content-icon">
                                  <img src="assets/images/money-icon.png" alt="spacely realtor directory listing bootstrap template">
                              </div>
                              <h3 class="process-content-title">Earn money</h3>
                              <p>Orders coming from spacely are 100% prepaid. We will bring you not just leads but new clients.</p>
                          </div>
                      </div>
                      <!-- process block close  -->
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-5">
                      <a href="register-page.html" class="btn btn-outline-primary">List your space</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="space-lg space-md space-xs">
          <div class="container-fluid">
              <div class="row">
                  <!-- section heading start  -->
                  <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-5 ">
                      <div class="section-heading">
                          <h2 class="section-heading-title">What Our Users Say </h2>
                          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus faucibus quam<br> vel volutpat vamus varius tellus vitae sapien
                          </p>
                      </div>
                  </div>
                  <!-- section heading close  -->
              </div>
              <div class="testimonial-carousel">
                  <div class="owl-carousel owl-theme owl-testimonial">
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"I love the fact that I can drop into spaces for two hours and then get up and go somewhere else to a meeting, and then wherever I look at the map, and buy a new space."</p>
                                  </div>
                                  <div class="testimonial-content-meta">Brock Singh Tailor, Strategy Consultant
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close  -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"All the good vibes of a cafe...without being subject to a cafe's music, prices or the random patron who asks: 'Hey dude, you writing a screenplay, too?'"</p>
                                  </div>
                                  <div class="testimonial-content-meta">Ajinkya Kaul, Freelance Journalist
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close  -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"I love croissantcy You just need to check in on the app and say that you are a Croissant member to the front desk and you can feel free to work."</p>
                                  </div>
                                  <div class="testimonial-content-meta">Ramesh Raj Sharma, Engineer at Spotify
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close  -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"I love the fact that I can drop into spaces for two hours and then get up and go somewhere else to a meeting, and then wherever I look at the map, and buy a new space."</p>
                                  </div>
                                  <div class="testimonial-content-meta">Brock Singh Tailor, Strategy Consultant
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close  -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"All the good vibes of a cafe...without being subject to a cafe's music, prices or the random patron who asks: 'Hey dude, you writing a screenplay, too?'"</p>
                                  </div>
                                  <div class="testimonial-content-meta">Ajinkya Kaul, Freelance Journalist
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close  -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"I love croissantcy You just need to check in on the app and say that you are a Croissant member to the front desk and you can feel free to work."</p>
                                  </div>
                                  <div class="testimonial-content-meta">Ramesh Raj Sharma, Engineer at Spotify
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"I love the fact that I can drop into spaces for two hours and then get up and go somewhere else to a meeting, and then wherever I look at the map, and buy a new space."</p>
                                  </div>
                                  <div class="testimonial-content-meta">Brock Singh Tailor, Strategy Consultant
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial start  -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"All the good vibes of a cafe...without being subject to a cafe's music, prices or the random patron who asks: 'Hey dude, you writing a screenplay, too?'"</p>
                                  </div>
                                  <div class="testimonial-content-meta">Ajinkya Kaul, Freelance Journalist
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close  -->
                      </div>
                      <div class="item">
                          <!-- testimonial start  -->
                          <div class="testimonial-block">
                              <div class="testimonial-content">
                                  <div class="testimonial-content-text">
                                      <p>"I love croissantcy You just need to check in on the app and say that you are a Croissant member to the front desk and you can feel free to work."</p>
                                  </div>
                                  <div class="testimonial-content-meta">Ramesh Raj Sharma, Engineer at Spotify
                                  </div>
                              </div>
                          </div>
                          <!-- testimonial close  -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="space-lg space-md space-xs bg-light rounded">
          <div class="container">
              <div class="row">
                  <!-- section heading start  -->
                  <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="section-heading text-center">
                          <h2 class="section-heading-title">Top Location</h2>
                          <p class="section-heading-text lead">Aliquam hendrerit nisi facilisis dui molestie, non vestibulum mi aliquet.<br> Aliquam eleifend eros vcidunt dictum eu rutrum justo.</p>
                      </div>
                  </div>
                  <!-- section heading close  -->
              </div>
              <div class="row">
                  <!-- location start  -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="location-listing-block">
                          <a href="#" class="location-listing-img zoom-img">
                              <img src="assets/images/location-img-1.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </a>
                          <div class="location-listing-content">
                              <h3 class="location-listing-content-title"><a href="#">Ahmedabad</a></h3>
                              <p class="location-listing-content-number">12</p>
                          </div>
                      </div>
                  </div>
                  <!-- location close  -->
                  <!-- location start  -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="location-listing-block">
                          <a href="#" class="location-listing-img zoom-img">
                              <img src="assets/images/location-img-2.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </a>
                          <div class="location-listing-content">
                              <h3 class="location-listing-content-title"><a href="#">Surat</a></h3>
                              <p class="location-listing-content-number">10</p>
                          </div>
                      </div>
                  </div>
                  <!-- location close  -->
                  <!-- location start  -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="location-listing-block">
                          <a href="#" class="location-listing-img zoom-img">
                              <img src="assets/images/location-img-3.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </a>
                          <div class="location-listing-content">
                              <h3 class="location-listing-content-title"><a href="#">Rajkot</a></h3>
                              <p class="location-listing-content-number">05</p>
                          </div>
                      </div>
                  </div>
                  <!-- location close  -->
                  <!-- location start  -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="location-listing-block">
                          <a href="#" class="location-listing-img zoom-img">
                              <img src="assets/images/location-img-4.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </a>
                          <div class="location-listing-content">
                              <h3 class="location-listing-content-title"><a href="#">Ghandhinagar</a></h3>
                              <p class="location-listing-content-number">04</p>
                          </div>
                      </div>
                  </div>
                  <!-- location close  -->
                  <!-- location start  -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="location-listing-block">
                          <a href="#" class="location-listing-img zoom-img">
                              <img src="assets/images/location-img-5.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </a>
                          <div class="location-listing-content">
                              <h3 class="location-listing-content-title"><a href="#">Bhavnagar</a></h3>
                              <p class="location-listing-content-number">06</p>
                          </div>
                      </div>
                  </div>
                  <!-- location close  -->
                  <!-- location start  -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="location-listing-block">
                          <a href="#" class="location-listing-img zoom-img">
                              <img src="assets/images/location-img-6.jpg" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                          </a>
                          <div class="location-listing-content">
                              <h3 class="location-listing-content-title"><a href="#">Bharuch</a></h3>
                              <p class="location-listing-content-number">07</p>
                          </div>
                      </div>
                  </div>
                  <!-- location close  -->
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-4 ">
                      <a href="listing-location.html" class="btn btn-outline-primary"> View all location</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="space-lg space-md space-xs">
          <div class="container">
              <div class="row">
                  <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-5 ">
                      <!-- section heading start  -->
                      <div class="section-heading">
                          <h2 class="section-heading-title">Companies We’ve Worked With </h2>
                          <p class="lead">Egestas sapien tincidunt nec uis quis leo id odio venenatis porta ut eget nibh. Sed feugiat sem in condimentum consectetur.
                          </p>
                      </div>
                      <!-- section heading close  -->
                  </div>
              </div>
              <div class="row">
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                      <!-- client logo start  -->
                      <div class="client-logo">
                          <img src="assets/images/logo-buffer.png" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                      </div>
                      <!-- client logo close  -->
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                      <!-- client logo start  -->
                      <div class="client-logo">
                          <img src="assets/images/logo-buzzumo.png" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                      </div>
                      <!-- client logo close  -->
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                      <!-- client logo start  -->
                      <div class="client-logo">
                          <img src="assets/images/logo-clearbit.png" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                      </div>
                      <!-- client logo close  -->
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                      <!-- client logo start  -->
                      <div class="client-logo">
                          <img src="assets/images/logo-converkit.png" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                      </div>
                      <!-- client logo close  -->
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                      <!-- client logo start  -->
                      <div class="client-logo">
                          <img src="assets/images/logo-envato.png" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                      </div>
                      <!-- client logo close  -->
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                      <!-- client logo start  -->
                      <div class="client-logo">
                          <img src="assets/images/logo-frame.png" alt="spacely realtor directory listing bootstrap template" class="img-fluid">
                      </div>
                      <!-- client logo close  -->
                  </div>
              </div>
          </div>
      </div>
      <!-- cta section start  -->
      <div class="container">
          <div class="cta-section">
              <div class="row d-flex align-items-center">
                  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                      <div class="cta-section-content">
                          <img src="assets/images/map-pin-white.png" alt="spacely realtor directory listing bootstrap template">
                          <h2 class="cta-section-content-title">List your office space with us. </h2>
                          <p class="cta-section-content-text">We are experts in driving enquiries and filling vacant workspace.</p>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                      <a href="register-page.html" class="btn btn-white cta-section-btn"><i class="fas fa-plus"></i>List your space</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- cta section close  -->

      <!-- footer section  -->
  </div>
  <!-- Modal -->
  <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <!-- login form start -->
                  <div class="login-form border-0">
                      <div class="login-form-body">
                          <h4 class="login-form-title">Login</h4>
                          <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email') }}" aria-describedby="email" placeholder="example@gmail.com" autocomplete="email" required="" autofocus>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="password-field">Password</label>
                                  <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="current-password" placeholder="*************">
                                  <span toggle="#password-field" class="fa fa-fw fa-eye password-hide-icon showhidepassword"></span>
                                  {{-- <small>Must be 8-20 characters long.</small> --}}
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="login-remember-password-block">
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="rememberme"  name="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <label class="custom-control-label" for="rememberme">{{ __('Remember Me') }}</label>
                                  </div>
                                  <div class="forgot-password-link">
                                      <a href="{!! route('password.request') !!}"> Forgot Password?</a>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Login</button>
                          </form>

                      </div>
                      <div class="login-form-footer">
                          <p class="login-form-footer-text">Don’t have a Spacely account? <a href="{!! route('register') !!}">Create Account</a> and we’ll set you up so you can list your space.</p>
                      </div>
                  </div>
                  <!-- login form close -->
              </div>
          </div>
      </div>
  </div>

@endsection
