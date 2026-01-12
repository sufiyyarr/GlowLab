<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Appointment - GlowLab</title>
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

<body class="appointment-page">

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
          <li><a href="{{ route('contact')}}">Contact</a></li>
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
        <h1>Appointment</h1>
        <p>Choose a time that works best for you and secure your appointment with our expert clinical team instantly</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Appointmnet Section -->
    <section id="appointmnet" class="appointmnet section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- Appointment Info -->
          <div class="col-lg-6">
            <div class="appointment-info">
              <h3>Quick &amp; Easy Online Booking</h3>
              <p class="mb-4">Book your appointment in just a few simple steps. Our specialists are ready to provide you with expert skincare treatments tailored to your unique beauty goals.</p>

              <div class="info-items">
                <div class="info-item d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div>
                    <h5>Flexible Scheduling</h5>
                    <p class="mb-0">Choose from available time slots that fit your busy schedule</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="250">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-stopwatch"></i>
                  </div>
                  <div>
                    <h5>Quick Response</h5>
                    <p class="mb-0">Get confirmation within 15 minutes of submitting your request</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div>
                    <h5>Expert Medical Care</h5>
                    <p class="mb-0">Board-certified doctors and specialists at your service</p>
                  </div>
                </div><!-- End Info Item -->
              </div>

              <div class="emergency-contact mt-4" data-aos="fade-up" data-aos-delay="350">
                <div class="emergency-card p-3">
                  <h6 class="mb-2"><i class="bi bi-telephone-fill me-2"></i>Emergency Hotline</h6>
                  <p class="mb-0">Call <strong>+6012-345 6789</strong> for urgent medical assistance</p>
                </div>
              </div>

            </div>
          </div><!-- End Appointment Info -->

          <!-- Appointment Form -->
          <div class="col-lg-6">
            <div class="appointment-form-wrapper" data-aos="fade-up" data-aos-delay="200">

              <form action="{{ route('appointment.store') }}" method="POST" class="appointment-form">
                @csrf
                <div class="row gy-3">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Full Name" required="">
                  </div>

                  <div class="col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                  </div>

                  <div class="col-md-6">
                    <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number" required="">
                  </div>

                  <div class="col-md-6">
                    <select name="services" class="form-select" required="">
                      <option value="">Select Services</option>
                      <option value="Basic Facial Treatment">Basic Facial Treatment</option>
                      <option value="Acne Solutions Treatment">Acne Solutions Treatment</option>
                      <option value="Anti-Aging Treatment">Anti-Aging Treatment</option>
                      <option value="Brightening Treatment">Brightening Treatment</option>
                      <option value="Hydrating Facial Treatment">Hydrating Facial Treatment</option>
                      <option value="Pigmentation Laser Treatment">Pigmentation Laser Treatment</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <input type="date" name="date" class="form-control" required="">
                  </div>

                  <div class="col-md-6">
                    <input type="time" name="time" class="form-control" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="5" placeholder="Please describe your skin concerns or reason for visit (optional)"></textarea>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-appointment w-100">
                      <i class="bi bi-calendar-plus me-2"></i>Book Appointment
                    </button>
                  </div>

                </div>
              </form>
            </div>
          </div><!-- End Appointment Form -->

        </div>

        <!-- Process Steps -->
        <div class="process-steps mt-5" data-aos="fade-up" data-aos-delay="300">
          <div class="row text-center gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">1</div>
                <div class="step-icon">
                  <i class="bi bi-person-fill"></i>
                </div>
                <h5>Fill Details</h5>
                <p>Provide your personal information and select your preferred services</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">2</div>
                <div class="step-icon">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <h5>Choose Date</h5>
                <p>Select your preferred date and time slot from available options</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">3</div>
                <div class="step-icon">
                  <i class="bi bi-check-circle"></i>
                </div>
                <h5>Confirmation</h5>
                <p>Receive instant confirmation and appointment details via email or SMS</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">4</div>
                <div class="step-icon">
                  <i class="bi bi-heart-pulse"></i>
                </div>
                <h5>Get Treatment</h5>
                <p>Visit our clinic at your scheduled time and receive quality treatment</p>
              </div>
            </div><!-- End Step -->

          </div>
        </div><!-- End Process Steps -->

      </div>

    </section><!-- /Appointmnet Section -->

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

