<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_barangs')->insert([[
            'kode' => '1',
            'jenis' => 'Kain Batik'
        ],
        [
            'kode' => '2',
            'jenis' => 'Kain Sutra'
        ],
        [
            'kode' => '3',
            'jenis' => 'Kain Percak'
        ]
        ]);
    }
}
