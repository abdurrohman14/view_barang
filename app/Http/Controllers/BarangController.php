<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    function beranda() {
        $kumpulanBarang = DB::table('barangs')
        ->join('jenis_barangs', 'barangs.kode_jenis_barang', '=', 'jenis_barangs.kode')
        ->get();

        return view('home', ["barang" => $kumpulanBarang]);
    }


    function detail($id) {
        $barang = DB::table('barangs')
        ->join('jenis_barangs', 'barangs.kode_jenis_barang', '=', 'jenis_barangs.kode')
        ->find($id);

        return view('detail', ["barang" => $barang]);
    }
}
