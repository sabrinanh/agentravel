<?php

namespace App\Http\Controllers;

use App\Models\ptour;
use App\Models\pesanan;
use App\Http\Requests\StorepesananRequest;
use App\Http\Requests\UpdatepesananRequest;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $ptours = ptour::where('id', $id)->first();
        return view('Cust.detail', compact('ptours'));
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
     * @param  \App\Http\Requests\StorepesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepesananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepesananRequest  $request
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepesananRequest $request, pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesanan $pesanan)
    {
        //
    }
}
