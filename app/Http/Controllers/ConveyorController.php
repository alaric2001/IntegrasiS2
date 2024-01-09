<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Conveyor;
use App\Models\Activity;
use App\Models\Inspection;
use App\Models\Batch;

class ConveyorController extends Controller
{
    public function index()
    {
        // Mengambil semua data conveyor dari database
        $conveyors = Conveyor::with(['activity'])->get();

        $totalWorkConv = Conveyor::where('status', 'Work')->count();
        $totalActiveActi = Activity::where('status', 'Active')->count();
        $inspCount = Inspection::count();
        $batchCount = Batch::count();
        // dd($totalWorkConv);
        // Mengirim data conveyors ke view 'conveyors.index' untuk ditampilkan
        return view('equipment/conveyor', compact('conveyors', 'totalWorkConv', 'totalActiveActi', 'inspCount', 'batchCount'));
    }

    public function show(string $id)
    {
        $detail_conv = Conveyor::with(['activity'])->find($id);
        // dd($detail_conv);
        // Menampilkan halaman detail untuk conveyor tertentu
        return view('equipment/detail_conv', compact('detail_conv'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat conveyor baru
        return view('conveyors.create');
    }

    public function store(Request $request)
    {
        // Melakukan validasi data yang diinputkan pada form pembuatan conveyor
        $request->validate([
            'nama' => 'required', // Nama harus diisi
            'tipe' => 'required', // Tipe harus diisi
            'status' => 'required', // Status harus diisi
            'kapasitas' => 'required|numeric', // Kapasitas harus diisi dan berupa angka
        ]);

        // Menyimpan data conveyor baru ke dalam database
        Conveyor::create($request->all());

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('conveyors.index')
                            ->with('success', 'Conveyor berhasil dibuat.');
    }

    

    public function edit(Conveyor $conveyor)
    {
        // Menampilkan form untuk mengedit data conveyor tertentu
        return view('conveyors.edit', compact('conveyor'));
    }

    public function update(Request $request, Conveyor $conveyor)
    {
        // Melakukan validasi data yang diinputkan pada form pengeditan conveyor
        $request->validate([
            'nama' => 'required', // Nama harus diisi
            'tipe' => 'required', // Tipe harus diisi
            'status' => 'required', // Status harus diisi
            'kapasitas' => 'required|numeric', // Kapasitas harus diisi dan berupa angka
        ]);

        // Memperbarui data conveyor dalam database
        $conveyor->update($request->all());

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('conveyors.index')
                            ->with('success', 'Conveyor berhasil diperbarui.');
    }

    public function destroy(Conveyor $conveyor)
    {
        // Menghapus data conveyor dari database
        $conveyor->delete();

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('conveyors.index')
                            ->with('success', 'Conveyor berhasil dihapus.');
    }
}
