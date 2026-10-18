<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nim'         => '1234567890',
                'nama'        => 'Dewanti Syafitri',
                'jk'          => 'L',
                'prodi'       => 'Sistem Informasi',
                'no_telp'     => '081400527248',
                'alamat'      => 'Rajeg City',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
