<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'title',
    //     'id_user',
    //     'password',
    // ];
    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
