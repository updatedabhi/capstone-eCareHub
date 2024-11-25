<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|regex:/[0-9]{3}-[0-9]{3}-[0-9]{4}/',
            'date' => 'nullable|date',
            'message' => 'nullable|string',
        ]);

        // Save appointment data to the database
        Appointment::create($request->all());

        // Redirect or return success response
        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
