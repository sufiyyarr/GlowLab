<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - GlowLab</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="services-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <svg class="my-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Sparkle / Beauty Icon -->
          <path d="M12 2L13.8 6.2L18 8L13.8 9.8L12 14L10.2 9.8L6 8L10.2 6.2L12 2Z"
                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
          <path d="M18 14L18.9 16.1L21 17L18.9 17.9L18 20L17.1 17.9L15 17L17.1 16.1L18 14Z"
                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
          <path d="M6 14L6.6 15.4L8 16L6.6 16.6L6 18L5.4 16.6L4 16L5.4 15.4L6 14Z"
                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
        </svg>

        <h1 class="sitename">GlowLab</h1>
      </a>


      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('mainpage')}}">Home</a></li>
          <li><a href="{{ route('services')}}" class="active">Services</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div>
        <a class="btn-getstarted" href="{{ route('appointment')}}">Appointment</a>
        
        <a href="{{ route('profile') }}">
          <i class="bi bi-person-circle"></i> Profile
        </a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="title-wrapper">
        <h1>Services</h1>
        <p>Explore our beauty treatments and aesthetic services, carefully designed to provide safe, comfortable and effective care for every client</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="services-tabs">

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade show active" id="services-primary" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <img src="assets/img/health/clean.webp" alt="Basic Facial Treatment"></img>
                    </div>
                    <div class="service-details">
                      <h5>Basic Facial Treatment</h5>
                      <p>A gentle facial treatment designed to cleanse, refresh and maintain healthy skin, suitable for all skin types</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Skin Analysis</li>
                        <li><i class="fa fa-check-circle"></i>Cleansing & Exfoliation</li>
                        <li><i class="fa fa-check-circle"></i>Hydrating Mask</li>
                      </ul>
                      <a href="{{ route('facialDetails')}}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <img src="assets/img/health/basic.webp"alt="acne"></img>
                    </div>
                    <div class="service-details">
                      <h5>Acne Solutions Treatment</h5>
                      <p>A targeted treatment focused on reducing acne, calming inflammation, and preventing future breakouts</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Acne Clear Extraction</li>
                        <li><i class="fa fa-check-circle"></i>Antibacterial Therapy</li>
                        <li><i class="fa fa-check-circle"></i>Oil-Control Mask</li>
                      </ul>
                      <a href="{{ route('acneDetails')}}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <img src="assets/img/health/aging.webp" alt="aging"></img>
                    </div>
                    <div class="service-details">
                      <h5>Anti-Aging Treatment</h5>
                      <p>A rejuvenating treatment that helps reduce fine lines and improves skin firmness for a youthful look</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Collagen Boost Therapy</li>
                        <li><i class="fa fa-check-circle"></i>Firming Facial Massage</li>
                        <li><i class="fa fa-check-circle"></i>Anti-Wrinkle Serum Infusion</li>
                      </ul>
                      <a href="{{ route('antiagingDetails')}}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <img src="assets/img/health/brightening.webp" alt="brightening"></img>
                    </div>
                    <div class="service-details">
                      <h5>Brightening Treatment</h5>
                      <p>A skin-brightening treatment that helps improve dull skin and enhance a more radiant, even complexion</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Vitamin C Infusion</li>
                        <li><i class="fa fa-check-circle"></i>Radiance Peel</li>
                        <li><i class="fa fa-check-circle"></i>Tone-Evening Mask</li>
                      </ul>
                      <a href="{{ route('brighteningDetails')}}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <img src="assets/img/health/dehydrated.webp" alt="hydrating Services"></img>
                    </div>
                    <div class="service-details">
                      <h5>Hydrating Facial Treatment</h5>
                      <p>A deeply moisturizing treatment that restores skin hydration, improves softness and elasticity</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Hyaluronic Acid Boost</li>
                        <li><i class="fa fa-check-circle"></i>Moisture-Lock Therapy</li>
                        <li><i class="fa fa-check-circle"></i>Soothing Hydro-Mask</li>
                      </ul>
                      <a href="{{ route('hydratingDetails')}}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <img src="assets/img/health/laser.webp" alt="laser Services"></img>
                    </div>
                    <div class="service-details">
                      <h5>Pigmentation Laser Treatment</h5>
                      <p>A specialized laser treatment designed to reduce pigmentation and promote a clearer, more even skin tone</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Precision Spot Targeting</li>
                        <li><i class="fa fa-check-circle"></i>Skin Tone Correction</li>
                        <li><i class="fa fa-check-circle"></i>Post-Laser Healing Care</li>
                      </ul>
                      <a href="{{ route('pigmentationDetails')}}"  class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>


              </div>
            </div>

            

        <div class="services-cta" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <div class="cta-content">
                <i class="fa fa-calendar-check"></i>
                <h3>Ready to Schedule Your Appointment?</h3>
                <p>Take the first step toward radiant, healthy skin. Book your session online today or get in touch with our team to find the treatment that is perfect for you</p>
                <div class="cta-buttons">
                  <a href="{{ route('appointment')}}" class="btn-book">Book Now</a>
                  <a href="{{ route('contact')}}" class="btn-contact">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">GlowLab</span>
          </a>
          <div class="footer-contact pt-3">
            <p>GlowLab Beauty Clinic,</p>
            <p>55, Road Brick</p>
            <p>43200, Kuala Lumpur.</p>
            
          </div>

          
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <br>
          <br>
          <br>
          <p><strong>Phone:</strong> <span>+6012-345 6789</span></p>
          <p><strong>Email:</strong> <span>glowlabclinic@gmail.com</span></p>
          <p><strong>Operating hours:</strong> <span>8:00 AM - 6:00 PM</span></p>
        </div>


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">GlowLab</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>