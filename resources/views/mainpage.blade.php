<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - GlowLab</title>
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

<body class="index-page">

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
          <li><a href="{{ route('mainpage')}}" class="active">Home</a></li>
          <li><a href="{{ route('services')}}">Services</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      
      <div>
        <a class="btn-getstarted" href="{{ route('appointment')}}">Appointment</a>
        <a class="btn-profile" href="{{ route('profile') }}">
          <i class="bi bi-person-circle"></i> Profile
        </a>
      </div>
      

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="container-fluid p-0">
        <div class="hero-wrapper">
          <div class="hero-image">
            <img src="assets/img/health/showcase_1.webp" alt="Advanced Healthcare" class="img-fluid">
          </div>

          <div class="hero-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 col-md-10" data-aos="fade-right" data-aos-delay="100">
                  <div class="content-box">
                    <span class="badge-accent" data-aos="fade-up" data-aos-delay="150">Leading Skincare Specialists</span>
                    <h1 data-aos="fade-up" data-aos-delay="200">Glow Brighter, Feel Better</h1>
                    <p data-aos="fade-up" data-aos-delay="250">Personalized facial treatments designed to restore confidence, enhance beauty, and bring out your natural glow</p>

                    <div class="cta-group" data-aos="fade-up" data-aos-delay="300">
                      <a href="{{ route('appointment')}}" class="btn btn-primary">Book Appointment</a>
                      <a href="{{ route('services')}}" class="btn btn-outline">Explore Services</a>
                    </div>

                    <div class="info-badges" data-aos="fade-up" data-aos-delay="350">
                      <div class="badge-item">
                        <i class="bi bi-telephone-fill"></i>
                        <div class="badge-content">
                          <span>Emergency Line</span>
                          <strong>+60 12-345 6789</strong>
                        </div>
                      </div>
                      <div class="badge-item">
                        <i class="bi bi-clock-fill"></i>
                        <div class="badge-content">
                          <span>Working Hours</span>
                          <strong>Mon-Fri: 8:00 AM - 6:00 PM</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="features-wrapper">
                <div class="row gy-4">

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="450">
                      <div class="feature-icon">
                        <i class="bi bi-sun-fill"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Personalised Care</h3>
                        <p>Tailored treatments for your unique skin</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                      <div class="feature-icon">
                        <i class="bi bi-lungs-fill"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Safe & Certified</h3>
                        <p>Only dermatologist-approved products and tech</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="550">
                      <div class="feature-icon">
                        <i class="bi bi-check"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Honest Advice</h3>
                        <p>Transparent pricing, no hard selling</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Home About Section -->
    <section id="home-about" class="home-about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/health/skincareclinic.webp" alt="Modern Healthcare Facility" class="img-fluid rounded-3 mb-4">
              <div class="experience-badge">
                <span class="years">25+</span>
                <span class="text">Years of Excellence</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Committed to Exceptional Patient Care</h2>
              <p class="lead">Your well-being is our priority. GlowLab offers a safe and convenient platform for accessing beauty services provided by experienced professionals</p>

              <p>With a focus on ethical practices, modesty and transparency, we aim to deliver a comfortable and reliable beauty care experience you can trust</p>

              <div class="row g-4 mt-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4>Compassionate Care</h4>
                    <p>Patient-focused treatments delivered with care, respect and ethical values</p>
                  </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-star"></i>
                    </div>
                    <h4>Medical Excellence</h4>
                    <p>Professional beauty services supported by expertise, safety and quality standards</p>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper mt-4">
                <a href="{{ route('about') }}" class="btn btn-primary">Learn More About Us</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 certifications-row" data-aos="fade-up" data-aos-delay="600">
          <div class="col-12 text-center mb-4">
            <h4 class="certification-title">Our Accreditations</h4>
          </div>
          <div class="col-12">
            <div class="certifications">
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="700">
                <img src="assets/img/clients/clients-1.webp" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="800">
                <img src="assets/img/clients/clients-2.webp" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="900">
                <img src="assets/img/clients/clients-3.webp" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="1000">
                <img src="assets/img/clients/clients-4.webp" alt="Certification">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Home About Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Services</h2>
        <p>Explore our beauty treatments delivered by experienced professionals with care and confidence</p><br>
        <a href="{{ route('services') }}" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <img src="assets/img/health/clean.webp"alt="Basic Facial Treatment"></img>
              </div>
              <div class="service-content">
                <h3>Basic Facial Treatment</h3>
                <p>A gentle facial treatment designed to cleanse, refresh and maintain healthy skin, suitable for all skin types</p>
                
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <img src="assets/img/health/basic.webp"alt="acne"></img>
              </div>
              <div class="service-content">
                <h3>Acne Solutions Treatment</h3>
                <p>A targeted treatment focused on reducing acne, calming inflammation and preventing future breakouts</p>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <img src="assets/img/health/aging.webp" alt="aging"></img>
              </div>
              <div class="service-content">
                <h3>Anti-Aging Treatment</h3>
                <p>A rejuvenating treatment that helps reduce fine lines and improve skin firmness for a more youthful look</p>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <img src="assets/img/health/brightening.webp" alt="brightening"></img>
              </div>
              <div class="service-content">
                <h3>Brightening Treatment</h3>
                <p>A skin-brightening treatment that helps improve dull skin and enhance a more radiant, even complexion</p>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <img src="assets/img/health/dehydrated.webp" alt="hydrating Services"></img>
              </div>
              <div class="service-content">
                <h3>Hydrating Facial Treatment</h3>
                <p>A deeply moisturizing treatment that restores skin hydration, improves softness and elasticity</p>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <img src="assets/img/health/laser.webp" alt="laser Services"></img>
              </div>
              <div class="service-content">
                <h3>Pigmentation Laser Treatment</h3>
                <p>A specialized laser treatment designed to reduce pigmentation and promote a clearer, more even skin tone</p>
              </div>
            </div>
          </div><!-- End Service Card -->
        </div>

      </div>

    </section><!-- /Featured Services Section -->


    <!-- Emergency Info Section -->
    <section id="emergency-info" class="emergency-info section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Quick Actions</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            <!-- Quick Actions -->
            <div class="quick-actions" data-aos="fade-up" data-aos-delay="300">
              <div class="row">
                <div class="col-sm-8 col-lg-4">
                  <a href="{{ route('contact') }}" class="action-link">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Get Directions</span>
                  </a>
                </div>
                <div class="col-sm-8 col-lg-4">
                  <a href="{{ route('appointment')}}" class="action-link">
                    <i class="bi bi-calendar-check"></i>
                    <span>Book Appointment</span>
                  </a>
                </div>
                <div class="col-sm-8 col-lg-4">
                  <a href="#" class="action-link">
                    <i class="bi bi-chat-dots"></i>
                    <span>Live Chat</span>
                  </a>
                </div>
              </div>
            </div><!-- End Quick Actions -->

          </div>
        </div>

      </div>

    </section><!-- /Emergency Info Section -->

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