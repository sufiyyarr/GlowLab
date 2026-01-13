<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'required|string|max:20',
            'services' => 'required|string|max:255',
            'date'     => 'required|date',
            'time'     => 'required',
            'message'  => 'nullable|string',
        ]);

        $appointment = Appointment::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'service' => $request->services,
            'date'    => $request->date,
            'time'    => $request->time,
            'message' => $request->message,
            'status'  => 'pending',
        ]);

        return redirect()->route('confirmation', $appointment->id);
    }

    public function confirmation($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('confirmation', compact('appointment'));
    }

    public function profile()
    {
        $appointments = Appointment::orderBy('date', 'desc')->get();
        return view('profile', compact('appointments'));
    }

    // Edit (Reschedule) Form
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('edit', compact('appointment'));
    }

    // Update Appointment
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'message' => 'nullable|string',
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update([
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,
        ]);

        // Redirect logic
        $redirectTo = $request->input('redirect') === 'admin' 
            ? route('admin.dashboard') 
            : route('profile');

        return redirect($redirectTo)->with('success', 'Appointment rescheduled successfully.');
    }


    
    public function destroy($id, Request $request)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update([
            'status' => 'cancelled',
            'canceled_at' => now(),
        ]);

        $redirectTo = $request->input('redirect') === 'admin' 
            ? route('admin.dashboard') 
            : route('profile');

        return redirect($redirectTo)->with('success', 'Appointment cancelled successfully.');
    }

    public function markComplete($id, Request $request)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'completed';
        $appointment->save();

        $redirectTo = $request->input('redirect') === 'admin' 
            ? route('admin.dashboard') 
            : redirect()->back();

        return redirect($redirectTo)->with('success', 'Appointment marked as completed.');
    }



}