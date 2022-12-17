<?php

namespace Database\Seeders;

use App\Models\ptour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PtourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ptour::create([
        'nama'=>'Paket Tour Bali A',
        'harga'=>'960000',
        'tanggalb'=>'2022-07-25',
        'tanggalp'=>'2022-07-27',
        'destinasi'=>
        '1. Desa Panglipuran
        2. Blangsinga
        3. Pantai Pandawa
        4. Pantai Kuta
        5. Tanah Lot
        6. Dreamland
        7. Puja Mandala
        8. Cening Bagus
        9. Krisna
        10. Dewata',
        'fasilitas'=>'
        1. Transportasi Bus Pariwisata
        2. BIG BUS seat 2-2 / 48
        3. Hotel 2 Malam (1 kamar isi 2-3 orang)
        4. Tiket Masuk Wisata
        5. Makan 8x prasmanan
        6. Snack 1x
        7. Air Mineral botol
        8. Free Dokumentasi softcopy
        9. Free Tol Parkir
        10. Tour Leader & Tour Guide Lokal',
        'img'=>'images\Bali2.jpg',
        'kota'=>'Bali',
        'hari'=>'3',
        'malam'=>'2'
        ]);

        ptour::create([
            'nama'=>'Paket Tour Lombok',
            'harga'=>'1500000',
            'tanggalb'=>'2022-07-29',
            'tanggalp'=>'2022-07-31',
            'destinasi'=>'
            1. Gili Trawangan
            2. Desa Sade
            3. Bukit Malimbu
            4. Desa Sukarare
            5. Pantai Senggigi
            6. Tanjung Aan
            7. Islamic Center
            8. Kuta Mandalika',
            'Fasilitas'=>
            '1. Bus Pariwisata 2-2 seat
            2. Penyeberangan Ketapang - Lembar (Gili Trawangan)
            3. Hotel 2 Malam (1 kamar 2 Org)
            4. Tiket Masuk Wisata
            5. Makan 8x (prasmanan)
            6. Snack Box 1x
            7. Air Mineral Botol (1 botol tiap hari)
            8. Tour Guide Lokal dan Tour Leader
            9. Dokumentasi softcopy (Video & Foto)',
            'img'=>'images\Lombok2.jpg',
            'kota'=>'Lombok',
            'hari'=>'3',
            'malam'=>'2'
            ]);


            ptour::create([
                'nama'=>'Paket Tour Malang',
                'harga'=>'450000',
                'tanggalb'=>'2022-07-25',
                'tanggalp'=>'2022-07-27',
                'destinasi'=>'
                1. Eco Green Park
                2. Petik apel
                3. Kebun Raya
                4. Alun-alun Malang
                5. Goedang oleh-oleh
                6. Lembah Tumpang
                7. Alun-alun Batu',
                'Fasilitas' =>'
                1. Transportasi Bus Pariwisata
                2. BIG BUS seat 2-2 / 48
                3. Hotel 1 Malam (1 kamar isi 2-3 orang)
                4. Tiket Masuk Wisata
                5. Makan 2x prasmanan
                6. Snack 1x
                7. Air Mineral botol
                8. Free Dokumentasi softcopy
                9. Free Tol Parkir
                10. Tour Leader & Tour Guide Lokal',
                'img'=>'images\Malang.jpg',
                'kota'=>'Malang',
                'hari'=>'3',
                'malam'=>'2'
                ]);


    }
}
