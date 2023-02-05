<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;
    public function briefs(){
        return $this->hasMany(Brief::class);
    }

    public function tasks(){
        return $this->hasMany(Brief::class);
    }
}
