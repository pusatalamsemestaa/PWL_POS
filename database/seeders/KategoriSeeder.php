<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 101, 'kategori_kode' => 'B01', 'kategori_nama' => 'sepatu'],
            ['kategori_id' => 102, 'kategori_kode' => 'B02', 'kategori_nama' => 't-shirt'],
            ['kategori_id' => 103, 'kategori_kode' => 'B03', 'kategori_nama' => 'tas'],
            ['kategori_id' => 104, 'kategori_kode' => 'B04', 'kategori_nama' => 'jeans'],
            ['kategori_id' => 105, 'kategori_kode' => 'B05', 'kategori_nama' => 'aksesoris'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
