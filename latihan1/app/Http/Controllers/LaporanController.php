<?php
// app/Http/Controllers/LaporanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        return view('pengaduan.laporan', compact('laporan'));
    }

    public function show($id)
    {
        $laporan = Laporan::find($id);
        return view('laporan.show', compact('laporan'));
    }

    // Add other methods like create, store, edit, update, and destroy as needed.
}