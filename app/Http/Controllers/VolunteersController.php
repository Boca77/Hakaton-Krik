<?php

namespace App\Http\Controllers;

use App\Models\Volunteers;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteers $volunteers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteers $volunteers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunteers $volunteers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteers $volunteers)
    {
        //
    }
}
