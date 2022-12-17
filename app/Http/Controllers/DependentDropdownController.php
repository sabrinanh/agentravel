<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\Provinces;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class DependentDropdownController extends Controller
{
    public function index()
    {
        $provinces = Provinces::pluck('name', 'id');

        return view('Marketing/editpaketbali', [
            'provinces' => $provinces,
        ]);
    }

    public function store(Request $request)
    {
        $cities = Cities::where('province_id', $request->get('id'))->pluck('name', 'id');

        return response()->json($cities);
    }
}
