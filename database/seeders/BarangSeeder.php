<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1001, 'kategori_id' => 102, 'barang_kode' => '63258', 'barang_nama' => 'house of smith -longsleeve white', 'harga_beli' => 145000, 'harga_jual' => 160000],
            ['barang_id' => 1002, 'kategori_id' => 102, 'barang_kode' => '63273', 'barang_nama' => 'house of smith -coral anime motif', 'harga_beli' => 130000, 'harga_jual' => 150000],
            ['barang_id' => 1003, 'kategori_id' => 104, 'barang_kode' => '3654', 'barang_nama' => 'loewe -baggy jeans', 'harga_beli' => 680000, 'harga_jual' => 739900],
            ['barang_id' => 1004, 'kategori_id' => 101, 'barang_kode' => '127689', 'barang_nama' => 'adidas -samba white black combo', 'harga_beli' => 2250000, 'harga_jual' => 2490000],
            ['barang_id' => 1005, 'kategori_id' => 103, 'barang_kode' => '8091', 'barang_nama' => 'barklana -backpack', 'harga_beli' => 189000, 'harga_jual' => 220000],
            ['barang_id' => 1006, 'kategori_id' => 101, 'barang_kode' => '127365', 'barang_nama' => 'onitsuka tiger -mexico 66', 'harga_beli' => 2300000, 'harga_jual' => 2450000],
            ['barang_id' => 1007, 'kategori_id' => 105, 'barang_kode' => '76487', 'barang_nama' => 'thanksinsomnia -skull ring', 'harga_beli' => 45000, 'harga_jual' => 65000],
            ['barang_id' => 1008, 'kategori_id' => 105, 'barang_kode' => '76488', 'barang_nama' => 'thanksinsomnia -pearl necklace', 'harga_beli' => 87900, 'harga_jual' => 120000],
            ['barang_id' => 1009, 'kategori_id' => 103, 'barang_kode' => '8042', 'barang_nama' => 'barklana -totebag green', 'harga_beli' => 120000, 'harga_jual' => 165000],
            ['barang_id' => 1010, 'kategori_id' => 102, 'barang_kode' => '63276', 'barang_nama' => 'house of smith -black guardian', 'harga_beli' => 130000, 'harga_jual' => 150000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
