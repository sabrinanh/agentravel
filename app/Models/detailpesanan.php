<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailpesanan extends Model
{
    use HasFactory;
    protected $table = 'detailpesanans';
    protected $guarded= ['id'];

    public function ptour(){
        return $this->hasMany('App\ptour', 'ptour_id', 'id');
    }

    public function pesanan(){
        return $this->belongsTo('App\pesanan', 'pesanan_id', 'id');
    }
}
