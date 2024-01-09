<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;
use App\Models\Activity;
use App\Models\Batch;
use App\Models\Aluminium;

class InspectionController extends Controller
{
    public function index()
    {
        // Mengambil semua data
        $inspections = Inspection::with(['activity', 'batch', 'aluminium'])->get();
        
        // Menghitung jumlah inspeksi dengan quality "Good"
        $goodCount = $inspections->where('quality', 'Good')->count();

        // Menghitung jumlah inspeksi dengan quality "Bad"
        $badCount = $inspections->where('quality', 'Bad')->count();

        // Mengirim data ke view
        return view('inspection/dashboard', compact('inspections', 'goodCount', 'badCount'));
    }

    public function show(string $id)
    {
        $inspec_detail = Inspection::with(['activity', 'batch', 'aluminium'])->find($id);
        
        // Mengirim data operator ke view ' untuk ditampilkan
        return view('inspection/detail', compact('inspec_detail'));
    }
}
