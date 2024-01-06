<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conveyor;
use App\Models\Ultrasonic;
use App\Models\Activity;
use App\Models\Inspection;
use App\Models\Batch;

class EqDashboardController extends Controller
{
    public function index()
    {
        $totalWorkConv = Conveyor::where('status', 'Work')->count();
        $totalWorkUltra = Ultrasonic::where('status', 'Work')->count();
        $totalActiveActi = Activity::where('status', 'Active')->count();
        $inspCount = Inspection::count();
        $batchCount = Batch::count();
        // dd($totalWorkConv);
        // Mengirim data conveyors ke view 'conveyors.index' untuk ditampilkan
        return view('equipment.dashboard', compact('totalWorkUltra', 'totalWorkConv', 'totalActiveActi', 'inspCount', 'batchCount'));
    }
}
