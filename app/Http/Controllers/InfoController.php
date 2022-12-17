<?php

namespace App\Http\Controllers;

use App\Models\ptour;
use Illuminate\Http\Request;
use App\Models\detailpesanan;


class InfoController extends Controller
{
    public function index($id)
    {

        $ptours = ptour::where('id', $id)->first();
        return view('Cust.info', compact('ptours'));
    }

    public function storeData()
    {
        // dd(request('ptours'));
        $data = [
            'jumlah' => request('jumlah')
        ];
        detailpesanan::create($data);

        return redirect("/formpesanA?tours=".request('ptours'));
    }

    public function view()
    {
        if(request('tours') == 1){
            return view('Cust.formpesan');
        }else if(request('tours') == 2){
            return view('Cust.formpesanLombok');
        }else if(request('tours') == 3){
            return view('Cust.formpesanMalang');
        }
        // return view('Cust.formpesan');
    }
}
