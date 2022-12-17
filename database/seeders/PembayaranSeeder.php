<?php

namespace Database\Seeders;

use App\Models\pembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pembayaran::create([
        'nama'=>'Transfer BCA',
        'norek'=>'0878882211',
        'img'=>'images\bca1.jpg',
        'biaya_layanan'=>'20000',
        'kode'=>'884'
        ]);

        pembayaran::create([
            'nama'=>'Transfer BNI',
            'norek'=>'1273332231',
            'img'=>'images\bni.jpg',
            'biaya_layanan'=>'20000',
            'kode'=>'773'
        ]);

        pembayaran::create([
                'nama'=>'Transfer BRI',
                'norek'=>'1523332231',
                'img'=>'images\bri.jpg',
                'biaya_layanan'=>'20000',
                'kode'=>'664'
        ]);

        pembayaran::create([
            'nama'=>'Transfer MANDIRI',
            'norek'=>'1433332232',
            'img'=>'images\mandiri.jpg',
            'biaya_layanan'=>'20000',
            'kode'=>'567'
            ]);
    }
}
