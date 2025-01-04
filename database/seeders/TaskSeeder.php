<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan contoh data tugas ke dalam tabel 'tasks'
        Task::create([
            'name' => 'Framework',
            'description' => 'Belajar membuat aplikasi web dengan Laravel',
            'deadline' => now()->addDays(7), // Deadline 7 hari dari sekarang
            'completed' => false,
        ]);

        Task::create([
            'name' => 'Menyelesaikan Tubes',
            'description' => 'Menyelesaikan tubes buanyak',
            'deadline' => now()->addMonths(1), // Deadline 1 bulan dari sekarang
            'completed' => false,
        ]);

        Task::create([
            'name' => 'Beli mam',
            'description' => 'nasi padang, yupi',
            'deadline' => now()->addDays(3), // Deadline 3 hari dari sekarang
            'completed' => true,
        ]);

        Task::create([
            'name' => 'Rapat Negara',
            'description' => 'Rapat negara antara Indonesia dan Singapore',
            'deadline' => now()->addDays(2), // Deadline 2 hari dari sekarang
            'completed' => false,
        ]);
    }
}
