<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - GlowLab</title>
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

<body class="about-page">

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
          <li><a href="{{ route('about') }}" class="active">About</a></li>
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
        <h1>About</h1>
        <p>Discover the passion for aesthetics and the digital innovation that drives GlowLab to provide you with a world-class beauty experience</p>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="content">
              <h2>Get to know our dedication to skin health</h2>
              <p>
                At GlowLab, we believe that true beauty begins with healthy, well-cared-for skin. Our clinic was founded on the principle of providing a sanctuary where medical expertise meets a personalized aesthetic experience. We are committed to delivering high-quality treatments in a professional and welcoming environment, ensuring that every client feels valued and understood from the moment they walk through our doors
              </p>
              <p>
                Our facility is equipped with modern aesthetic technology, allowing us to provide safe and effective solutions for a wide range of skin concerns. Rather than just offering services, we focus on building long-term relationships with our clients by providing honest consultations and results-driven care that enhances your natural confidence
              </p>

              <div class="stats-container" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                  <div class="col-sm-6 col-lg-12 col-xl-6">
                    <div class="stat-item">
                      <div class="stat-number">
                        <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>+
                      </div>
                      <div class="stat-label">Years of Experience</div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 col-xl-6">
                    <div class="stat-item">
                      <div class="stat-number">
                        <span data-purecounter-start="0" data-purecounter-end="50000" data-purecounter-duration="2" class="purecounter"></span>+
                      </div>
                      <div class="stat-label">Patients Treated</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('services')}}" class="btn-secondary">View Our Services</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-section" data-aos="fade-left" data-aos-delay="200">
              <div class="main-image">
                <img src="assets/img/health/interior.webp" alt="Healthcare consultation" class="img-fluid">
              </div>
              <div class="image-grid">
                <div class="grid-item">
                  <img src="assets/img/health/scanning.webp" alt="Medical facility" class="img-fluid">
                </div>
                <div class="grid-item">
                  <img src="assets/img/health/cosmetics.webp" alt="Medical staff" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="certifications-section" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-header">
                <h3>Accreditations &amp; Certifications</h3>
                <p>We are proud to be accredited by leading healthcare organizations</p>
              </div>
              <div class="certifications-grid">
                <div class="certification-item">
                  <img src="assets/img/clients/clients-1.webp" alt="JCI Accreditation" class="img-fluid">
                </div>
                <div class="certification-item">
                  <img src="assets/img/clients/clients-2.webp" alt="NABH Certification" class="img-fluid">
                </div>
                <div class="certification-item">
                  <img src="assets/img/clients/clients-3.webp" alt="ISO 9001" class="img-fluid">
                </div>
                <div class="certification-item">
                  <img src="assets/img/clients/clients-4.webp" alt="CAP Accreditation" class="img-fluid">
                </div>
                <div class="certification-item">
                  <img src="assets/img/clients/clients-5.webp" alt="Medical Board" class="img-fluid">
                </div>
                <div class="certification-item">
                  <img src="assets/img/clients/clients-6.webp" alt="Healthcare Association" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

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