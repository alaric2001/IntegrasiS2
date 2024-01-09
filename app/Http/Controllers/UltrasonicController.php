<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ultrasonic;

use App\Models\Activity;
use App\Models\Inspection;
use App\Models\Batch;

class UltrasonicController extends Controller
{
    public function index()
    {
        // Mengambil semua data ultrasonic
        $ultrasonics = Ultrasonic::with(['activity'])->get();
        
        $totalWorkUltra = Ultrasonic::where('status', 'Work')->count();
        $totalActiveActi = Activity::where('status', 'Active')->count();
        $inspCount = Inspection::count();
        $batchCount = Batch::count();
        // Mengembalikan tampilan index dari ultrasonics dan melewatkan data ultrasonics ke view tersebut
        return view('equipment.ultrasonic', compact('ultrasonics', 'totalWorkUltra', 'totalActiveActi', 'inspCount', 'batchCount'));
    }


    public function show(string $id)
    {
        $detail_ultra = Ultrasonic::with(['activity'])->find($id);
        // dd($detail_conv);
        // Menampilkan halaman detail untuk conveyor tertentu
        return view('equipment/detail_ultra', compact('detail_ultra'));
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