<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        return view('donate');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'donor_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'donation_amount' => 'required|numeric|min:1',
            'card_number' => 'required|numeric',
            'card_holder_name' => 'required|string',
            'expiry' => 'required|string',
            'cvv' => 'required|numeric',
        ]);

        return back()->with('success', 'Donation successful. Thank you!');
    }
}
