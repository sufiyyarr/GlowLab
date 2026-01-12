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
  <form action="{{ route('appointment.update', $appointment->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="date" class="form-label">Date</label>
      <input type="date" name="date" class="form-control" value="{{ $appointment->date }}" required>
    </div>

    <div class="mb-3">
      <label for="time" class="form-label">Time</label>
      <input type="time" name="time" class="form-control" value="{{ $appointment->time }}" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message (optional)</label>
      <textarea name="message" class="form-control">{{ $appointment->message }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>
    <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
