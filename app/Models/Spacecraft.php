<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spacecraft extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function crews()
    {
        return $this->hasMany(Crew::class); // Один корабль на несколько человек
    }
}
