<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Operator;
use App\Models\Ultrasonic;
use App\Models\Conveyor;

class ActivityController extends Controller
{
    public function index()
    {
        // Mengambil semua data aktivitas beserta data operator, ultrasonic, dan conveyor yang terkait
        $activities = Activity::with(['operator', 'ultrasonic', 'conveyor'])->get();
        
        // Mengirim data aktivitas ke view 'activities.index' untuk ditampilkan
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        // Mengambil semua data operator, ultrasonic, dan conveyor untuk ditampilkan di form pembuatan aktivitas
        $operators = Operator::all();
        $ultrasonics = Ultrasonic::all();
        $conveyors = Conveyor::all();
        
        // Menampilkan form pembuatan aktivitas baru dengan data yang tersedia
        return view('activities.create', compact('operators', 'ultrasonics', 'conveyors'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diinputkan pada form pembuatan aktivitas
        $request->validate([
            'operator_id' => 'required|exists:operators,id', // Memastikan operator_id ada di tabel operators
            'ultrasonic_id' => 'required|exists:ultrasonics,id', // Memastikan ultrasonic_id ada di tabel ultrasonics
            'conveyor_id' => 'required|exists:conveyors,id', // Memastikan conveyor_id ada di tabel conveyors
            'nama' => 'required', // Nama aktivitas harus diisi
            'status' => 'required', // Status aktivitas harus diisi
            'lokasi' => 'required', // Lokasi aktivitas harus diisi
            'activity_date' => 'nullable|date', // Tanggal aktivitas, boleh kosong dan harus format tanggal
            'duration' => 'nullable|integer', // Durasi aktivitas, boleh kosong dan harus angka bulat
            'batch' => 'nullable|integer', // Batch aktivitas, boleh kosong dan harus angka bulat
        ]);

        // Menyimpan data aktivitas baru ke dalam database
        Activity::create($request->all());

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('activities.index')
                            ->with('success', 'Aktivitas berhasil dibuat.');
    }

    public function show(Activity $activity)
    {
        // Menampilkan halaman detail untuk aktivitas tertentu
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        // Mengambil semua data operator, ultrasonic, dan conveyor untuk ditampilkan di form pengeditan aktivitas
        $operators = Operator::all();
        $ultrasonics = Ultrasonic::all();
        $conveyors = Conveyor::all();
        
        // Menampilkan form pengeditan aktivitas dengan data yang tersedia
        return view('activities.edit', compact('activity', 'operators', 'ultrasonics', 'conveyors'));
    }

    public function update(Request $request, Activity $activity)
    {
        // Validasi data yang diinputkan pada form pengeditan aktivitas
        $request->validate([
            'operator_id' => 'required|exists:operators,id', // Memastikan operator_id ada di tabel operators
            'ultrasonic_id' => 'required|exists:ultrasonics,id', // Memastikan ultrasonic_id ada di tabel ultrasonics
            'conveyor_id' => 'required|exists:conveyors,id', // Memastikan conveyor_id ada di tabel conveyors
            'nama' => 'required', // Nama aktivitas harus diisi
            'status' => 'required', // Status aktivitas harus diisi
            'lokasi' => 'required', // Lokasi aktivitas harus diisi
            'activity_date' => 'nullable|date', // Tanggal aktivitas, boleh kosong dan harus format tanggal
            'duration' => 'nullable|integer', // Durasi aktivitas, boleh kosong dan harus angka bulat
            'batch' => 'nullable|integer', // Batch aktivitas, boleh kosong dan harus angka bulat
        ]);

        // Memperbarui data aktivitas dalam database
        $activity->update($request->all());

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('activities.index')
                            ->with('success', 'Aktivitas berhasil diperbarui.');
    }

    public function destroy(Activity $activity)
    {
        // Menghapus data aktivitas dari database
        $activity->delete();

        // Mengarahkan pengguna kembali ke halaman index dengan pesan sukses
        return redirect()->route('activities.index')
                            ->with('success', 'Aktivitas berhasil dihapus.');
    }
}
