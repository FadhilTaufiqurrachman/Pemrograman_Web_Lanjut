<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori 1: MKN (Makanan)
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Tango Wafer', 'harga_beli' => 6000, 'harga_jual' => 7500],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG03', 'barang_nama' => 'Oreo 133g', 'harga_beli' => 7000, 'harga_jual' => 8500],

            // Kategori 2: MNM (Minuman)
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Aqua Botol 600ml', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG05', 'barang_nama' => 'Pocari Sweat 500ml', 'harga_beli' => 5500, 'harga_jual' => 7000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG06', 'barang_nama' => 'Teh Pucuk Harum', 'harga_beli' => 3000, 'harga_jual' => 4000],

            // Kategori 3: PKN (Pakaian)
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG07', 'barang_nama' => 'Kaos Polos Cotton Combed', 'harga_beli' => 35000, 'harga_jual' => 50000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG08', 'barang_nama' => 'Kemeja Flanel Pria', 'harga_beli' => 75000, 'harga_jual' => 100000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG09', 'barang_nama' => 'Celana Chino Panjang', 'harga_beli' => 80000, 'harga_jual' => 120000],

            // Kategori 4: ELK (Elektronik)
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG10', 'barang_nama' => 'Mouse Wireless M220', 'harga_beli' => 100000, 'harga_jual' => 135000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG11', 'barang_nama' => 'Flashdisk 32GB', 'harga_beli' => 45000, 'harga_jual' => 65000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG12', 'barang_nama' => 'Kabel Data Type-C', 'harga_beli' => 15000, 'harga_jual' => 25000],

            // Kategori 5: ATK (Alat Tulis)
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG13', 'barang_nama' => 'Buku Tulis 38 Lembar', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG14', 'barang_nama' => 'Bolpoin Gel Hitam', 'harga_beli' => 2000, 'harga_jual' => 3500],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Kertas HVS A4 70gsm', 'harga_beli' => 45000, 'harga_jual' => 55000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
