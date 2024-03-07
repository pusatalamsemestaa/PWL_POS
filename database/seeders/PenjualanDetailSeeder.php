<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //penjualan 1
            [
                'detail_id' => 11290201,
                'penjualan_id' => 290201,
                'barang_id' => 1007,
                'harga' => 65000,
                'jumlah' => 2
            ],
            [
                'detail_id' => 12290201,
                'penjualan_id' => 290201,
                'barang_id' => 1008,
                'harga' => 120000,
                'jumlah' => 1
            ],
            [
                'detail_id' => 13290201,
                'penjualan_id' => 290201,
                'barang_id' =>  1009,
                'harga' => 165000,
                'jumlah' => 3
            ],
            //penjualan 2
            [
                'detail_id' => 21290201,
                'penjualan_id' => 290202,
                'barang_id' => 1002,
                'harga' => 150000,
                'jumlah' => 3
            ],
            [
                'detail_id' => 22290201,
                'penjualan_id' => 290202,
                'barang_id' => 1003,
                'harga' => 739900,
                'jumlah' => 1
            ],
            [
                'detail_id' => 23290201,
                'penjualan_id' => 290202,
                'barang_id' => 1004,
                'harga' => 2490000,
                'jumlah' => 1
            ],
            //penjualan 3
            [
                'detail_id' => 31290201,
                'penjualan_id' => 290203,
                'barang_id' => 1005,
                'harga' => 220000,
                'jumlah' => 4
            ],
            [
                'detail_id' => 32290201,
                'penjualan_id' => 290203,
                'barang_id' => 1010,
                'harga' => 150000,
                'jumlah' => 2
            ],
            [
                'detail_id' => 33290201,
                'penjualan_id' => 290203,
                'barang_id' => 1001,
                'harga' => 160000,
                'jumlah' => 1
            ],
            //penjualan 4
            [
                'detail_id' => 41290201,
                'penjualan_id' => 290204,
                'barang_id' => 1008,
                'harga' => 120000,
                'jumlah' => 5100000
            ],
            [
                'detail_id' => 42290201,
                'penjualan_id' => 290204,
                'barang_id' => 1004,
                'harga' => 2490000,
                'jumlah' => 2
            ],
            [
                'detail_id' => 43290201,
                'penjualan_id' => 290204,
                'barang_id' => 1006,
                'harga' => 2450000,
                'jumlah' => 1
            ],
            //penjualan 5
            [
                'detail_id' => 51290201,
                'penjualan_id' => 290205,
                'barang_id' => 1007,
                'harga' => 65000,
                'jumlah' => 3
            ],
            [
                'detail_id' => 52290201,
                'penjualan_id' => 290205,
                'barang_id' => 1003,
                'harga' => 739900,
                'jumlah' => 1
            ],
            [
                'detail_id' => 53290201,
                'penjualan_id' => 290205,
                'barang_id' => 1002,
                'harga' => 150000,
                'jumlah' => 1
            ],
            //penjualan 6
            [
                'detail_id' => 61290201,
                'penjualan_id' => 290206,
                'barang_id' => 1006,
                'harga' => 2450000,
                'jumlah' => 1
            ],
            [
                'detail_id' => 62290201,
                'penjualan_id' => 290206,
                'barang_id' => 1009,
                'harga' => 165000,
                'jumlah' => 1
            ],
            [
                'detail_id' => 63290201,
                'penjualan_id' => 290206,
                'barang_id' => 1010,
                'harga' => 150000,
                'jumlah' => 2
            ],
            //penjualan 7
            [
                'detail_id' => 71290201,
                'penjualan_id' => 290207,
                'barang_id' => 1001,
                'harga' => 160000,
                'jumlah' => 1
            ],
            [
                'detail_id' => 72290201,
                'penjualan_id' => 290207,
                'barang_id' => 1006,
                'harga' => 2450000,
                'jumlah' => 1
            ],
            [
                'detail_id' => 73290201,
                'penjualan_id' => 290207,
                'barang_id' => 1008,
                'harga' => 120000,
                'jumlah' => 2
            ],
            //penjualan 8
            [
                'detail_id' => 81290201,
                'penjualan_id' => 290208,
                'barang_id' => 1003,
                'harga' => 739900,
                'jumlah' => 1
            ],
            [
                'detail_id' => 82290201,
                'penjualan_id' => 290208,
                'barang_id' => 1009,
                'harga' => 165000,
                'jumlah' => 3
            ],
            [
                'detail_id' => 83290201,
                'penjualan_id' => 290208,
                'barang_id' => 1002,
                'harga' => 150000,
                'jumlah' => 1
            ],
            //penjualan 9
            [
                'detail_id' => 91290201,
                'penjualan_id' => 290209,
                'barang_id' => 1009,
                'harga' => 165000,
                'jumlah' => 2
            ],
            [
                'detail_id' => 92290201,
                'penjualan_id' => 290209,
                'barang_id' => 1007,
                'harga' => 65000,
                'jumlah' => 2
            ],
            [
                'detail_id' => 93290201,
                'penjualan_id' => 290209,
                'barang_id' => 1004,
                'harga' => 2490000,
                'jumlah' => 1
            ],
            //penjualan 10
            [
                'detail_id' => 101290201,
                'penjualan_id' => 290210,
                'barang_id' => 1008,
                'harga' => 65000,
                'jumlah' => 1
            ],
            [
                'detail_id' => 102290201,
                'penjualan_id' => 290210,
                'barang_id' => 1004,
                'harga' => 120000,
                'jumlah' => 3
            ],
            [
                'detail_id' => 103290201,
                'penjualan_id' => 290210,
                'barang_id' => 1002,
                'harga' => 150000,
                'jumlah' => 3
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
