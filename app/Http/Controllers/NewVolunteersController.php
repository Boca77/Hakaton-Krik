<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewVolunteersRequest;
use App\Models\NewVolunteers;

class NewVolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('new-volunteers-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewVolunteersRequest $request)
    {
        NewVolunteers::create($request->all());
        return redirect()->route('volunteer');
    }
}
