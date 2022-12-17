<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\User;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{

    public function storeData(Request $request)
    {
        $validateData =$request->validate([
            'name'=>'required',
            'email'=>'required',
            'nik'=>'required',
            'notelp'=>'required'
        ]);
        dd($validateData);
        // User::create($validateData);
        // return redirect('Cust.pembayaran');
    }

    public function view(){
        $data = pembayaran::all();
        return view('Cust.pembayaran', compact('data'));
        }

    public function lihat($id)
        {
            $data = pembayaran::where('id', $id)->first();
            return view('Cust.pembayaran1', compact('data'));
        }
}
