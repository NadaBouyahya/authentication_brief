<?php

namespace App\Models;

use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    public function briefs(){
        return $this->hasMany(Brief::class);
    }

 

}
