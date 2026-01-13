<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - GlowLab</title>
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
  <style>
  .star-rating {
      direction: rtl;
      display: inline-flex;
      font-size: 2rem;
  }

  .star-rating input {
      display: none;
  }

  .star-rating label {
      color: #ccc;
      cursor: pointer;
      transition: color 0.2s ease-in-out;
  }

  .star-rating input:checked ~ label,
  .star-rating label:hover,
  .star-rating label:hover ~ label {
      color: #f5b301;
  }
</style>


</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <svg class="my-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          
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
          <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
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
        <h1>Contact</h1>
        <p>Reach out to us today for expert advice, appointment inquiries, or more information about our specialized clinical treatments</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container">
        <div class="contact-wrapper">
          <div class="contact-info-panel">
            <div class="contact-info-header">
              <h3>Contact Information</h3>
              <p>Get in touch with us through any of the channels below. Our staff is available during clinic hours to assist you with appointments, service details, and any other information you may need</p>
            </div>

            <div class="contact-info-cards">
              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Our Location</h4>
                  <p>GlowLab Beauty Clinic, 55, Road Brick, 43200, Kuala Lumpur.</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-envelope-open"></i>
                </div>
                <div class="card-content">
                  <h4>Email Us</h4>
                  <p>glowlabclinic@gmail.com</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Call Us</h4>
                  <p>+6012-345 6789</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="card-content">
                  <h4>Working Hours</h4>
                  <p>Mon-Fri: 8:00 AM - 6:00 PM</p>
                </div>
              </div>
            </div>

            <div class="social-links-panel">
              <h5>Follow Us</h5>
              <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="contact-form-panel">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1161.1073981352374!2d101.76017747318635!3d3.0468841730272334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3500568765c3%3A0x5fc8b391943971c6!2sEco-Shop%20%E2%80%A2%20Bandar%20Tun%20Hussein%20Onn!5e0!3m2!1sen!2smy!4v1768152386121!5m2!1sen!2smy" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          <div class="form-container">
    <h3>Leave a Review</h3>
    <p>Share your experience with our treatments. Your feedback helps others.</p>

    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    <form action="{{ route('reviews.store') }}" method="POST">
    @csrf

      <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email Address" required>
          <label>Email Address</label>
      </div>

      <div class="mb-4">
        <label class="form-label d-block mb-2">Rating</label>

        <div class="star-rating">
            <input type="radio" id="star5" name="rating" value="5" required />
            <label for="star5" title="5 stars">★</label>

            <input type="radio" id="star4" name="rating" value="4" />
            <label for="star4" title="4 stars">★</label>

            <input type="radio" id="star3" name="rating" value="3" />
            <label for="star3" title="3 stars">★</label>

            <input type="radio" id="star2" name="rating" value="2" />
            <label for="star2" title="2 stars">★</label>

            <input type="radio" id="star1" name="rating" value="1" />
            <label for="star1" title="1 star">★</label>
        </div>
      </div>
                
      <div class="form-floating mb-3">
          <textarea class="form-control" name="comment" rows="5" placeholder="Your Review" required></textarea>
          <label>Your Review</label>
      </div>

      <div class="d-grid">
          <button type="submit" class="btn-submit">Send Review <i class="bi bi-send-fill ms-2"></i></button>
      </div>
  </form>

</div>

<hr>

<!-- Display reviews -->
<div class="reviews-container mt-4">
    <h3>User Reviews</h3>
    @forelse($reviews as $review)
        <div class="review-card mb-3 p-3 border rounded">
            <strong>{{ $review->name }}</strong> 
            <span class="text-warning">
                @for ($i = 1; $i <= 5; $i++)
                    {{ $i <= $review->rating ? '★' : '☆' }}
                @endfor
            </span>
            <p>{{ $review->comment }}</p>
            <small class="text-muted">Posted on {{ $review->created_at->format('d M Y H:i') }}</small>
        </div>
    @empty
        <p>No reviews yet.</p>
    @endforelse
</div>

          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

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