<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation - GlowLab</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body class="confirmation-page">

<header>Booking Confirmation</header>

<main class="main py-5" style="margin-top:80px;">
    <div class="container">
        <div class="card shadow-sm mx-auto" style="max-width:600px;">
            <div class="card-body text-center p-5">
                <i class="bi bi-check-circle-fill text-success fs-1 mb-3"></i>
                <h2 class="mb-3">Appointment Booked Successfully</h2>
                <p class="mb-4">Thank you! Your appointment details are below:</p>

                <div class="text-start mb-4">
                    <p><strong>Name:</strong> {{ $appointment->name }}</p>
                    <p><strong>Service:</strong> {{ $appointment->service }}</p>
                    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($appointment->date)->format('d M Y') }}</p>
                    <p><strong>Time:</strong> {{ \Carbon\Carbon::parse($appointment->time)->format('h:i A') }}</p>
                    <p><strong>Status:</strong> <span class="badge bg-warning text-dark">{{ ucfirst($appointment->status) }}</span></p>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                    <a href="{{ route('mainpage') }}" class="btn btn-primary me-md-2">Back to Home</a>
                    <a href="{{ route('profile') }}" class="btn btn-outline-secondary">View Profile</a>
                </div>
            </div>
        </div>
    </div>
</main>

<footer><!-- footer HTML here --></footer>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
