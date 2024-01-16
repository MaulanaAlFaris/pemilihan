<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_pemilihan' => 'presiden'],
            ['nama_pemilihan' => 'dpd ri'],
            ['nama_pemilihan' => 'dpr ri'],
            ['nama_pemilihan' => 'dprd provinsi'],
            ['nama_pemilihan' => 'dprd kab/kota'],
        ];

        DB::table('pemilihans')->insert($data);
    }
}
