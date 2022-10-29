<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'Kode_jenis_barang' => '1',
            'nama' => 'Batik Pekalongan',
            'deskripsi_detail' => 'Motif batik pekalongan memiliki ciri khas warna yang cerah dan eksentrik, juga mempunyai beberapa karakteristik lain seperti kainnya yang dipenuhi dengan garis dan titik, mayoritas motifnya bertema bunga dan tanaman, serta adanya sentuhan Tiongkok pada motifnya.',
            'stock' => '2',
            'foto' => 'img.jpg',
            'harga' => 'Rp. 200.000'
        ],
        [
            'Kode_jenis_barang' => '2',
            'nama' => 'Batik Banyuwangi',
            'deskripsi_detail' => 'Motif batik khas Banyuwangi selain wujud estetika dari ragam hias, namun juga memiliki nilai-nilai yang dianut oleh masyarakat Banyuwangi.',
            'stock' => '4',
            'foto' => 'img1.jpg',
            'harga' => 'Rp. 250.000'
        ],
        [
            'Kode_jenis_barang' => '3',
            'nama' => 'Batik Cirebon',
            'deskripsi_detail' => 'Motif batik Cirebon yang paling terkenal dan menjadi ikon Cirebon adalah motif Megamendung. Motif ini melambangkan awan pembawa hujan sebagai lambang kesuburan dan pemberi kehidupan.',
            'stock' => '3',
            'foto' => 'img2.jpg',
            'harga' => 'Rp. 350.000'
        ]
        ]);
    }
}
