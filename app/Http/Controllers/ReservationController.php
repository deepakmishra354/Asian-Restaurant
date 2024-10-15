<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required|string',
            'hour' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|string',
            'persons' => 'required|integer',
        ]);

        // Generate a unique table number (for simplicity, using random)
        $tableNumber = rand(100, 999);

        // Prepare email data
        $emailData = [
            'day' => $request->day,
            'hour' => $request->hour,
            'name' => $request->name,
            'phone' => $request->phone,
            'persons' => $request->persons,
            'tableNumber' => $tableNumber,
        ];

        // Send email to the logged-in user
        Mail::send('tablemail', $emailData, function($message) {
            $user = Auth::user(); // Get the currently logged-in user
            $message->to($user->email) // Use the logged-in user's email
                    ->subject('Table Reservation Confirmation');
        });

        return response()->json(['success' => true, 'message' => 'Table booked successfully!']);
    }
}
