<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DapilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nomor_dapil' => 1],
            ['nomor_dapil' => 2],
            ['nomor_dapil' => 3],
            ['nomor_dapil' => 4],
            ['nomor_dapil' => 5],
        ];

        DB::table('dapils')->insert($data);
    }
}
