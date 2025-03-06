<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Mahasiswa::create([
            'gabi_nim' => '23456',
            'gabi_nama' => 'gabe',
            'gabi_jurusan' => 'sija'
        ]);
    }
}
