<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function briefs(){
        return $this->belongsTo(Brief::class);
    }

    public function apprentices(){
        return $this->belongsToMany(Apprentice::class);
    }
}

