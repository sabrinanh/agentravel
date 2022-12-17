<?php

namespace App\Http\Controllers;

use App\Models\ptour;
use Illuminate\Http\Request;
use App\Http\Requests\StoreptourRequest;
use App\Http\Requests\UpdateptourRequest;

class PtourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('marketing.editpaketbali');
    }

    public function view(){
    $data = ptour::all();
    return view('Markting/pakettour', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marketing.pakettour');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreptourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ptour::create($request->except('_token', 'submit'));

        if($request->hasFile('img')){
            $request->file('img')->move('fototour/', $request->file('img')->getClientOriginalName());
            $data->img = $request->file('img')->getClientOriginalName();
            $data->save();
        }
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
