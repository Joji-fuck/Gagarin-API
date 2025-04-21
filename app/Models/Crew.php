<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function spacecraft()
    {
        return $this->belongsTo(Spacecraft::class); // Один человек к одному кораблю
    }
}
