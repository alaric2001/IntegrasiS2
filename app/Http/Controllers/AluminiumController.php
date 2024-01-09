<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluminium;

class AluminiumController extends Controller
{
    public function index()
    {
            // Mengambil semua data batch dari database
        $aluminiums = Aluminium::all();
        // dd($batches);
        // Mengirim data batch dan hasil perhitungan ke view 'operators.index'
        return view('inspection/product/dashboard', compact('aluminiums'));
    }
}
