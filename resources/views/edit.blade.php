<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reschedule Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
  <h3>Reschedule Appointment</h3>

  {{-- Display validation errors --}}
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul class="mb-0">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('appointment.update', $appointment->id) }}" method="POST">
    @csrf
    @method('PUT')

    {{-- Hidden field to preserve redirect --}}
    <input type="hidden" name="redirect" value="{{ request('redirect', 'profile') }}">

    <div class="mb-3">
      <label for="date" class="form-label">Date</label>
      <input type="date" name="date" class="form-control" 
             value="{{ old('date', $appointment->date) }}" 
             min="{{ date('Y-m-d') }}" required>
    </div>

    <div class="mb-3">
      <label for="time" class="form-label">Time</label>
      <input type="time" name="time" class="form-control" 
             value="{{ old('time', $appointment->time) }}" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message (optional)</label>
      <textarea name="message" class="form-control" rows="3">{{ old('message', $appointment->message) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>

    {{-- Cancel button: go back to admin if redirected from admin --}}
    <a href="{{ request('redirect') === 'admin' ? route('admin.dashboard') : route('profile') }}" 
       class="btn btn-secondary">
       Cancel
    </a>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
