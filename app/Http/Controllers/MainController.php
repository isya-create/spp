<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;
use App\Models\Pasangan;
use App\Models\Heir;
use App\Models\Jawatan;

class MainController extends Controller
{
    /**
     * Tampilkan halaman dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil data dari setiap model
        $pekerjas = Pekerja::first(); // Ambil contoh pekerja pertama (ganti dengan logika yang sesuai)
        $pasangan = Pasangan::first(); // Ambil contoh pasangan pertama
        $waris = Heir::first(); // Ambil contoh waris pertama
        $jawatan = Jawatan::first(); // Ambil contoh jawatan pertama

        dd($pekerjas);
        // Kirim data ke view
        return view('main', compact('pekerjas', 'pasangan', 'waris', 'jawatan'));
    }
}