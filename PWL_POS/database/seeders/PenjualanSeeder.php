<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Andi', 'penjualan_kode' => 'PJN-001', 'penjualan_tanggal' => '2026-03-01 08:15:00'],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'PJN-002', 'penjualan_tanggal' => '2026-03-01 09:30:00'],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Citra', 'penjualan_kode' => 'PJN-003', 'penjualan_tanggal' => '2026-03-01 11:45:00'],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Dewi', 'penjualan_kode' => 'PJN-004', 'penjualan_tanggal' => '2026-03-01 13:20:00'],
            ['penjualan_id' => 5, 'user_id' => 1, 'pembeli' => 'Eko', 'penjualan_kode' => 'PJN-005', 'penjualan_tanggal' => '2026-03-01 15:10:00'],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Fajar', 'penjualan_kode' => 'PJN-006', 'penjualan_tanggal' => '2026-03-02 08:45:00'],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Gita', 'penjualan_kode' => 'PJN-007', 'penjualan_tanggal' => '2026-03-02 10:05:00'],
            ['penjualan_id' => 8, 'user_id' => 1, 'pembeli' => 'Hadi', 'penjualan_kode' => 'PJN-008', 'penjualan_tanggal' => '2026-03-02 12:30:00'],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'Intan', 'penjualan_kode' => 'PJN-009', 'penjualan_tanggal' => '2026-03-02 14:15:00'],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Joko', 'penjualan_kode' => 'PJN-010', 'penjualan_tanggal' => '2026-03-02 16:00:00'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
