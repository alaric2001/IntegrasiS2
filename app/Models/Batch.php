<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $table = 'batch';
    protected $guarded = [];

    // Perbaikan pada relasi 'inspections'
    public function inspections()
    {
        return $this->hasMany(Inspection::class, 'batch_id', 'id');
    }

    // Metode untuk menghitung jumlah inspeksi
    public function inspectionCount()
    {
        return $this->inspections()->count();
    }
}
