<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 290201, 'user_id' => 3, 'pembeli' => 'anselma', 'penjualan_kode' => '001', 'penjualan_tanggal' => '2024-02-29 08:37:02'],
            ['penjualan_id' => 290202, 'user_id' => 3, 'pembeli' => 'emil mario', 'penjualan_kode' => '002', 'penjualan_tanggal' => '2024-02-29 08:54:17'],
            ['penjualan_id' => 290203, 'user_id' => 3, 'pembeli' => 'boby zidane', 'penjualan_kode' => '003', 'penjualan_tanggal' => '2024-02-29 10:02:54'],
            ['penjualan_id' => 290204, 'user_id' => 3, 'pembeli' => 'kendall jenner', 'penjualan_kode' => '004', 'penjualan_tanggal' => '2024-02-29 11:47:29'],
            ['penjualan_id' => 290205, 'user_id' => 3, 'pembeli' => 'tzuyu twice', 'penjualan_kode' => '005', 'penjualan_tanggal' => '2024-02-09 13:24:36'],
            ['penjualan_id' => 290206, 'user_id' => 3, 'pembeli' => 'chris evan', 'penjualan_kode' => '006', 'penjualan_tanggal' => '2024-02-29 15:13:25'],
            ['penjualan_id' => 290207, 'user_id' => 3, 'pembeli' => 'joe ruben', 'penjualan_kode' => '007', 'penjualan_tanggal' => '2024-02-29 17:01:55'],
            ['penjualan_id' => 290208, 'user_id' => 3, 'pembeli' => 'ria sw', 'penjualan_kode' => '008', 'penjualan_tanggal' => '2024-02-29 18:23:51'],
            ['penjualan_id' => 290209, 'user_id' => 3, 'pembeli' => 'narika shinta', 'penjualan_kode' => '009', 'penjualan_tanggal' => '2024-02-29 19:07:23'],
            ['penjualan_id' => 290210, 'user_id' => 3, 'pembeli' => 'angga bayu', 'penjualan_kode' => '010', 'penjualan_tanggal' => '2024-02-29 19:43:53'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
