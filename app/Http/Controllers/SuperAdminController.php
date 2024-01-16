<?php

namespace App\Http\Controllers;

use App\Models\DataPemilihan;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $dataPemilihans = DataPemilihan::all();
        return view('superadmin.presiden.index', compact('dataPemilihans'));
    }

    public function create()
    {
        return view('superadmin.presiden.create');
    }

    public function store(Request $request)
    {
        // Validasi input sesuai kebutuhan
        $request->validate([
            // Sesuaikan dengan nama kolom dan aturan validasi
        ]);

        // Simpan data ke dalam database
        DataPemilihan::create($request->all());

        return redirect()->route('superadmin.presiden.index')->with('success', 'Data Pemilihan berhasil disimpan!');
    }
}
