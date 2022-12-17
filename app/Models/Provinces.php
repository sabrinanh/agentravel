<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;

    protected $table = 'indonesia_provinces';

    public function cities()
    {
        return $this->hasMany('App\Models\City', 'province_code', 'code');
    }

    public function districts()
    {
        return $this->hasManyThrough(
            'App\Models\City',
            'province_code',
            'city_code',
            'code',
            'code'
        );
    }

    public function getLogoPathAttribute()
    {
        $folder = 'indonesia-logo/';
        $id = $this->getAttributeValue('id');
        $arr_glob = glob(public_path().'/'.$folder.$id.'.*');

        if (count($arr_glob) == 1) {
            $logo_name = basename($arr_glob[0]);

            return url($folder.$logo_name);
        }
    }
}

