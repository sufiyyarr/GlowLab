<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    // Show contact page + reviews
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('contact', compact('reviews'));
    }

    // Store new review
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Check if email exists in appointments
        $appointment = \App\Models\Appointment::where('email', $request->email)->first();

        if (!$appointment) {
            // Redirect back with alert
            return redirect()->back()->with('error', 'No appointment found with this email.');
        }

        // Create review using appointment name
        \App\Models\Review::create([
            'name' => $appointment->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }

}


