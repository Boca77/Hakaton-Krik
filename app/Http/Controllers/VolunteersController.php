<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Volunteers;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $longTermVolunteers = Volunteers::query()->where('is-long-term', '=', 1)->get();
        $shortTermVolunteers = Volunteers::query()->where('is-long-term', '=', 0)->get();
        return view('volunteers', compact('shortTermVolunteers', 'longTermVolunteers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show(Volunteers $volunteer)
    {
        $projects = Events::query()->where('id', '<', '4')->get();
        return view('single-volunteer-page', compact('volunteer', 'projects'));
    }
}
