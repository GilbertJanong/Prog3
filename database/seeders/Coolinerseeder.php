<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Coolinerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Soto Ayam',
                'asal_daerah' => 'Lamongan',
                'deskripsi' => 'Est 800SM',
            ],
            [
                'nama' => 'Ayam Bakar',
                'asal_daerah' => 'Amsterdam',
                'deskripsi' => 'Est 1900',
            ],
            [
                'nama' => 'Pangsit Mie Ayam',
                'asal_daerah' => 'Yokohama',
                'deskripsi' => 'Est 700M',
            ],
            [
                'nama' => 'Bakso',
                'asal_daerah' => 'Banjarmasin',
                'deskripsi' => 'Est 1945',
            ],
            [
                'nama' => 'Nasi Goreng',
                'asal_daerah' => 'Sidoarjo',
                'deskripsi' => 'Est 0M',
            ],
            [
                'nama' => 'Es Teh',
                'asal_daerah' => 'The',
                'deskripsi' => 'Est 100000SM',
            ],
            [
                'nama' => 'Bubur Kacang Hijau',
                'asal_daerah' => 'Sanghai',
                'deskripsi' => 'Est 90',
            ],
            [
                'nama' => 'Telur Gulung',
                'asal_daerah' => 'Bengkulu',
                'deskripsi' => 'Est 50000SM',
            ],
            
        ];

        DB::table('Cooliner_Table')->insert($data);
    }
}
