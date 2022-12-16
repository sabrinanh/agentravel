<?php

namespace App\Http\Controllers;

use App\Models\ptour;
use App\Http\Requests\StoreptourRequest;
use App\Http\Requests\UpdateptourRequest;

class PtourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreptourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreptourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ptour  $ptour
     * @return \Illuminate\Http\Response
     */
    public function show(ptour $ptour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ptour  $ptour
     * @return \Illuminate\Http\Response
     */
    public function edit(ptour $ptour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateptourRequest  $request
     * @param  \App\Models\ptour  $ptour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateptourRequest $request, ptour $ptour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ptour  $ptour
     * @return \Illuminate\Http\Response
     */
    public function destroy(ptour $ptour)
    {
        //
    }
}
