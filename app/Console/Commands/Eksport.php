<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Eksport extends Command
{
    // Nama dan tanda tangan perintah konsol
    protected $signature = 'make:eksport';

    // Deskripsi perintah konsol
    protected $description = 'Deskripsi perintah';

    // Membuat instance perintah baru
    public function __construct()
    {
        parent::__construct();
    }

    // Jalankan perintah konsol
    public function handle()
    {
        // Logika perintah di sini
        $this->info('Perintah Eksport berhasil dieksekusi.');
    }
}
