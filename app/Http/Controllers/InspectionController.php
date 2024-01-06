<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;

class InspectionController extends Controller
{
    public function index()
    {
        // Mengambil semua data
        $inspections = Inspection::all();
        
        // Mengirim data operator ke view ' untuk ditampilkan
        return view('inspection/dashboard', compact('inspections'));
    }
}
