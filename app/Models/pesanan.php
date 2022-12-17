<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\user', 'user_id', 'id');
    }

    public function detailpesanan(){
        return $this->hasMany('App\detailpesanan', 'pesanan_id', 'id');
    }
}
