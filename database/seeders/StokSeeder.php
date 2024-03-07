<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 31001, 'barang_id' => 1001, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 18],
            ['stok_id' => 31002, 'barang_id' => 1002, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 27],
            ['stok_id' => 31003, 'barang_id' => 1003, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 8],
            ['stok_id' => 31004, 'barang_id' => 1004, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 14],
            ['stok_id' => 31005, 'barang_id' => 1005, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 5],
            ['stok_id' => 31006, 'barang_id' => 1006, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 8],
            ['stok_id' => 31007, 'barang_id' => 1007, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 11],
            ['stok_id' => 31008, 'barang_id' => 1008, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 20],
            ['stok_id' => 31009, 'barang_id' => 1009, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 12],
            ['stok_id' => 31010, 'barang_id' => 1010, 'user_id' => 1, 'stok_tanggal' => '2024-03-01 20:17:36', 'stok_jumlah' => 5],
        ];
        DB::table('t_stok')->insert($data);
    }
}
