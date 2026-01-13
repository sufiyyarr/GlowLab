<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - GlowLab</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Admin Dashboard</h2>
    <h4>Appointments</h4>

    @if($appointment->isEmpty())
        <p>No appointments found.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($appointment as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->service }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ ucfirst($appointment->status) }}</td>
                    <td class="d-flex gap-1 flex-wrap">

                        {{-- Mark Completed --}}
                        @if($appointment->status !== 'completed')
                        <form action="{{ route('appointments.complete', $appointment->id) }}" method="POST" class="mb-1">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="redirect" value="admin">
                            <button type="submit" class="btn btn-success btn-sm">Mark Completed</button>
                        </form>
                        @endif

                        {{-- Reschedule --}}
                        @if($appointment->status === 'pending')
                        <a href="{{ route('appointment.edit', $appointment->id) }}?redirect=admin" 
                        class="btn btn-primary btn-sm mb-1">
                        Reschedule
                        </a>
                        @endif

                        {{-- Cancel --}}
                        @if($appointment->status !== 'cancelled' && $appointment->status !== 'completed')
                        <form action="{{ route('appointment.destroy', $appointment->id) }}" method="POST" class="mb-1">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="redirect" value="admin">
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to cancel this appointment?')">
                                Cancel
                            </button>
                        </form>
                        @endif

                        {{-- Completed Badge --}}
                        @if($appointment->status === 'completed')
                            <span class="badge bg-success">Completed</span>
                        @endif

                        {{-- Cancelled Badge --}}
                        @if($appointment->status === 'cancelled')
                            <span class="badge bg-danger">Cancelled</span>
                        @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    <a href="{{ route('mainpage') }}" class="btn btn-secondary mt-3">Back to Home</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
