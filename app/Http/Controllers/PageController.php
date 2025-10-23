<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman login
    public function login()
    {
        return view('login');
    }

    // Form login
    public function processLogin(Request $request)
    {
        // Ambil username dari form
        $username = $request->input('username');
        
        // Redirect username ke dashboard
        return redirect()->route('dashboard', ['username' => $username]);
    }

    // Halaman dashboard
    public function dashboard(Request $request)
    {
        // Ambil username dari URL
        $username = $request->query('username', 'Guest');
        
        // Kirim ke view dashboard
        return view('dashboard', compact('username'));
    }

    // Halaman pengelolaan
    public function pengelolaan()
    {
        // Data roti dalam bentuk array
        $rotis = [
            [
                'id' => 1,
                'nama' => 'Roti Coklat',
                'harga' => 8000,
                'stok' => 25,
                'kategori' => 'Roti Manis'
            ],
            [
                'id' => 2,
                'nama' => 'Roti Keju',
                'harga' => 10000,
                'stok' => 30,
                'kategori' => 'Roti Manis'
            ],
            [
                'id' => 3,
                'nama' => 'Roti Tawar',
                'harga' => 15000,
                'stok' => 20,
                'kategori' => 'Roti Tawar'
            ],
            [
                'id' => 4,
                'nama' => 'Roti Sobek',
                'harga' => 12000,
                'stok' => 15,
                'kategori' => 'Roti Manis'
            ],
            [
                'id' => 5,
                'nama' => 'Roti Pisang',
                'harga' => 9000,
                'stok' => 18,
                'kategori' => 'Roti Isi'
            ],
            [
                'id' => 6,
                'nama' => 'Roti Sosis',
                'harga' => 11000,
                'stok' => 22,
                'kategori' => 'Roti Isi'
            ]
        ];
        
        // Kirim data ke view
        return view('pengelolaan', compact('rotis'));
    }

    // Menampilkan halaman profile
    public function profile(Request $request)
    {
        // Ambil username dari URL
        $username = $request->query('username', 'Guest');
        
        // Kirim ke view profile
        return view('profile', compact('username'));
    }
}