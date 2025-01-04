<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Satuan;

class SatuanSeeder extends Seeder
{
    public function run()
    {
        Satuan::create(['kode_satuan' => 'PCS', 'nama_satuan' => 'Pieces']);
        Satuan::create(['kode_satuan' => 'PACK', 'nama_satuan' => 'Pack']);
        Satuan::create(['kode_satuan' => 'UNIT', 'nama_satuan' => 'Unit']);
        Satuan::create(['kode_satuan' => 'MTR', 'nama_satuan' => 'Meter']);
    }
}

