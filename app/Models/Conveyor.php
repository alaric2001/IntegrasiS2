<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conveyor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
}
