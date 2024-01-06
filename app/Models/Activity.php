<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';
    protected $guarded = [];

    // Definisikan relasi dengan model Operator
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    // Definisikan relasi dengan model Ultraconic
    public function ultrasonic()
    {
        return $this->belongsTo(Ultrasonic::class);
    }

    public function conveyor()
    {
        return $this->belongsTo(Conveyor::class);
    }

    public function inspection()
    {
        return $this->hasMany(Inspection::class);
    }
}
