<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Satuan;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'kode_barang' => 'BRG001',
            'nama_barang' => 'Barang Pertama',
            'harga_barang' => 10000.00,
            'deskripsi_barang' => 'Ini adalah barang pertama',
            'satuan_id' => Satuan::where('kode_satuan', 'PCS')->first()->id,
        ]);

        Barang::create([
            'kode_barang' => 'BRG002',
            'nama_barang' => 'Barang Kedua',
            'harga_barang' => 20000.00,
            'deskripsi_barang' => 'Ini adalah barang kedua',
            'satuan_id' => Satuan::where('kode_satuan', 'PACK')->first()->id,
        ]);

        Barang::create([
            'kode_barang' => 'BRG003',
            'nama_barang' => 'Barang Ketiga',
            'harga_barang' => 15000.00,
            'deskripsi_barang' => 'Ini adalah barang ketiga',
            'satuan_id' => Satuan::where('kode_satuan', 'UNIT')->first()->id,
        ]);

        Barang::create([
            'kode_barang' => 'BRG004',
            'nama_barang' => 'Barang Keempat',
            'harga_barang' => 5000.00,
            'deskripsi_barang' => 'Ini adalah barang keempat',
            'satuan_id' => Satuan::where('kode_satuan', 'MTR')->first()->id,
        ]);
    }
}

