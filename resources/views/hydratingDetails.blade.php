<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Service Details - GlowLab</title>
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

<body class="service-details-page">

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
          <li><a href="{{ route('services')}}">Services</a></li>
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
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('services')}}">Services</a></li>
            <li class="breadcrumb-item active current">Hydrating Treatment</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Hydrating Facial Treatment</h1>
        <p>A deeply moisturizing treatment that restores skin hydration, improves softness and elasticity</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details 2 Section -->
    <section id="service-details-2" class="service-details-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/dehydrated.webp" alt="hydrating Services" class="img-fluid">
              <div class="service-tag">
                <span>Specialized Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
              <h2>Hydrating Facial Treatment</h2>
              <p class="service-tagline">Deep moisture restoration and barrier strengthening therapy</p>

              <p>Our Hydrating Facial Treatment is an intensive procedure designed to replenish the skin’s moisture reservoirs and repair the protective lipid barrier. Utilizing professional-grade humectants and moisture-locking technology, this treatment reverses the effects of dehydration, environmental stress, and trans-epidermal water loss, leaving the skin feeling exceptionally soft and resilient</p>

              <p>This treatment is essential for individuals with dry, tight, or sensitized skin, as well as those looking to restore a healthy "plump" appearance to their complexion. Our specialists utilize a multi-layered approach to ensure hydration reaches the deeper layers of the epidermis, providing immediate comfort and a long-lasting, dewy finish</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Hyaluronic Acid Saturation</li>
                  <li><i class="bi bi-check-circle"></i> Barrier Repair Infusion</li>
                  <li><i class="bi bi-check-circle"></i> Hydro-Calming Mask Therapy</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="row mt-5">

          <div class="col-lg-8" data-aos="fade-right" data-aos-delay="100">
            <div class="booking-section">
              <h3>Ready to Schedule Your Appointment?</h3>
              <p>Our specialists are available for consultations Monday through Friday. Same-day appointments available for urgent cases.</p>

              <div class="availability-info">
                <div class="info-item">
                  <i class="bi bi-clock"></i>
                  <div>
                    <strong>Office Hours</strong>
                    <span>Mon-Fri: 8:00 AM - 6:00 PM</span>
                  </div>
                </div>
                <div class="info-item">
                  <i class="bi bi-telephone"></i>
                  <div>
                    <strong>Emergency Line</strong>
                    <span>+6012-345 6789</span>
                  </div>
                </div>
                <div class="info-item">
                  <i class="bi bi-geo-alt"></i>
                  <div>
                    <strong>Location</strong>
                    <span>GlowLab Beauty Clinic, 55, Road Brick, 43200, Kuala Lumpur.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200">
            <div class="appointment-card">
              <h4>Book Your Visit</h4>
              <p>Quick and easy online scheduling</p>
              <a href="{{ route('appointment')}}" class="btn-appointment">Book Appointment</a>
              <div class="contact-alternative">
                <span>Or call us at</span>
                <a href="tel:+15551234567">+6012-345 6789</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details 2 Section -->

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