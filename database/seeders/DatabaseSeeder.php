<?php

namespace Database\Seeders;

use App\Models\CollegeSchedule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CollegeSchedule::create([
            'kd_mkul' => 'KDM002',
            'nama_mkul' => 'Pemrograman Mobile',
            'kd_dosen' => 'KDD002',
            'jam' => '07:00',
            'ruang_kelas' => 'D001',
            'jumlah_mhs' => '35',
            'tanggal_mulai' => '12/12/2021',
        ]);
    }
}
