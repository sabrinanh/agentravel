<?php

namespace App\Http\Controllers;


use App\Models\ptour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $ptours = ptour::all();
        return view('Cust.home', compact('ptours'));
    }
}
