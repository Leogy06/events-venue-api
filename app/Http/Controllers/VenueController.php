<?php

namespace App\Http\Controllers;

use App\Models\venue;
use App\Http\Requests\StorevenueRequest;
use App\Http\Requests\UpdatevenueRequest;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorevenueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(venue $venue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(venue $venue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevenueRequest $request, venue $venue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(venue $venue)
    {
        //
    }
}
