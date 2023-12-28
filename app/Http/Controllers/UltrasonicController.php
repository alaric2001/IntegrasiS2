<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ultrasonic;

class UltrasonicController extends Controller
{
    public function index()
    {
        // Mengambil semua data ultrasonic
        $ultrasonics = Ultrasonic::all();
        
        // Mengembalikan tampilan index dari ultrasonics dan melewatkan data ultrasonics ke view tersebut
        return view('ultrasonics.index', compact('ultrasonics'));
    }

    public function create()
    {
        // Mengembalikan tampilan untuk membuat data ultrasonic baru
        return view('ultrasonics.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'tipe' => 'required',
            'status' => 'required',
        ]);

        // Membuat data ultrasonic baru dengan data yang telah divalidasi
        Ultrasonic::create($request->all());

        // Mengarahkan kembali ke halaman index dari ultrasonics dengan pesan sukses
        return redirect()->route('ultrasonics.index')
                        ->with('success', 'Ultrasonic berhasil dibuat.');
    }

    public function show(Ultrasonic $ultrasonic)
    {
        // Menampilkan detail dari ultrasonic tertentu
        return view('ultrasonics.show', compact('ultrasonic'));
    }

    public function edit(Ultrasonic $ultrasonic)
    {
        // Mengembalikan tampilan untuk mengedit data ultrasonic tertentu
        return view('ultrasonics.edit', compact('ultrasonic'));
    }

    public function update(Request $request, Ultrasonic $ultrasonic)
    {
        // Validasi data yang dikirim dari form edit
        $request->validate([
            'nama' => 'required',
            'tipe' => 'required',
            'status' => 'required',
        ]);

        // Memperbarui data ultrasonic dengan data yang telah divalidasi
        $ultrasonic->update($request->all());

        // Mengarahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('ultrasonics.index')
                        ->with('success', 'Ultrasonic berhasil diperbarui.');
    }

    public function destroy(Ultrasonic $ultrasonic)
    {
        // Menghapus data ultrasonic
        $ultrasonic->delete();

        // Mengarahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('ultrasonics.index')
                        ->with('success', 'Ultrasonic berhasil dihapus.');
    }
}