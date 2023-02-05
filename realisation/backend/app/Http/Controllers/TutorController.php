<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function show_tutors(){
        $tutors = Tutor::all();
        return response()->json($tutors);
    }

    public function show_tutor_byId($id){
        $tutor = Tutor::where('id', $id)->first();
        return response()->json($tutor);
    }
}
