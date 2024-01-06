<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id', 'id');
    }

    // Metode untuk menghitung jumlah inspeksi berdasarkan kualitas
    public static function countByQuality($quality, $batchId)
    {
        return self::where('quality', $quality)
            ->where('batch_id', $batchId)
            ->count();
    }
}
