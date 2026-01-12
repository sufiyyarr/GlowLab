
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - GlowLab</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - MediTrust Bootstrap Template</title>
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
    body {
      background-color: #f9f9f9;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .appointment-actions button {
      margin-right: 5px;
    }
    .section-title {
      margin-bottom: -50px;
      text-align: left;
    }
  </style>
</head>
<body>
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
          <i class="bi bi-person-circle" class="active"></i> Profile
        </a>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="title-wrapper">
        <h1>Profile</h1>
      </div>
    </div><!-- End Page Title -->

  <div class="container my-3">
    <div class="row">

      <!-- User Info -->
      <div class="col-md-4 mb-4">
        <div class="card p-4">
          <h4 class="section-title"><i class="bi bi-person-circle me-2"></i>User Profile</h4>

          @if($appointments->isNotEmpty())
            @php
              $user = $appointments->first();
            @endphp
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Member Since:</strong> {{ $user->created_at->format('d M, Y') }}</p>
          @else
            <p>No user information available.</p>
          @endif

          <!-- Logout Button -->
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
              <i class="bi bi-box-arrow-right"></i> Logout
            </button>
          </form>

        </div>
      </div>

      <!-- Appointments -->
      <div class="col-md-8">

        <!-- Upcoming Appointments -->
        <div class="card p-4 mb-4">
          <h4 class="section-title"><i class="bi bi-calendar-check me-2"></i>Upcoming Appointments</h4>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Service</th>
                <th>Date & Time</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($appointments->where('status', 'pending') as $appointment)
                <tr>
                  <td>{{ $appointment->service }}</td>
                  <td>{{ \Carbon\Carbon::parse($appointment->date)->format('d M, Y') }} - {{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}</td>
                  <td>{{ $appointment->message ?? '-' }}</td>
                  <td>{{ ucfirst($appointment->status) }}</td>
                  <td class="appointment-actions">
                    <a href="{{ route('appointment.edit', $appointment->id) }}" class="btn btn-sm btn-warning">Reschedule</a>
                    <form action="{{ route('appointment.destroy', $appointment->id) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')">Cancel</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center">No upcoming appointments.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <!-- Completed Appointments -->
        <div class="card p-4 mt-4">
            <h4 class="section-title"><i class="bi bi-check-circle me-2"></i>Completed Appointments</h4>
            @if($appointments->where('status', 'completed')->isEmpty())
                <p class="text-center mt-3">No completed appointments.</p>
            @else
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Date & Time</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments->where('status', 'completed') as $appointment)
                        <tr>
                            <td>{{ $appointment->service }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($appointment->date)->format('d M, Y') }} 
                                - {{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}
                            </td>
                            <td>{{ $appointment->message ?? '-' }}</td>
                            <td>
                                <span class="badge bg-success">{{ ucfirst($appointment->status) }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>


      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
