<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brief extends Model
{
    use HasFactory;
    public function tutor(){
        return $this->belongsTo(Tutor::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function apprentices(){
        return $this->belongsToMany(Apprentice::class);
    }
}

