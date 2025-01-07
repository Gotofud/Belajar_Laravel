<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Gitar Gibson J-160E', 'merk'=>'Gibson', 'harga'=>320000000],
            ['nama_barang'=>'Gitar Artisan', 'merk'=>'Yamaha Ori real', 'harga'=>125000],
            ['nama_barang'=>'Honda CB350RS', 'merk'=>'Honda', 'harga'=>70000000],
            ['nama_barang'=>'Royal Enfield Classic 350', 'merk'=>'Royal Enfield', 'harga'=>122900000],
            ['nama_barang'=>'Honda Civic RS', 'merk'=>'Honda', 'harga'=>616800000]
        ];

        DB::table('barangs')->insert($barangs);
    }
}
