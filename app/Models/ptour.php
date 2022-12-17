<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ptour extends Model
{
    use HasFactory;
    protected $table = 'ptours';
    protected $guarded= [];

    public function detailpesanan(){
        return $this->hasMany('App\detailpesanan', 'barang_id', 'id');
    }
}
