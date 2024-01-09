<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Batch;
use App\Models\Inspection;

class BatchController extends Controller
{
    public function index()
    {
            // Mengambil semua data batch dari database
        $batches = Batch::all();
        // dd($batches);
        // Mengirim data batch dan hasil perhitungan ke view 'operators.index'
        return view('inspection/batch/dashboard', compact('batches'));
    }

    public function show(string $id)
    {
        $batch_detail = Batch::find($id);
        // dd($batches);
        // Mengirim data batch dan hasil perhitungan ke view 'operators.index'
        return view('inspection/batch/detail', compact('batch_detail'));
    }
}
