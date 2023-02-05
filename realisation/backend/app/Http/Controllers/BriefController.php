<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{
    public function show_brief(){
        $briefs = Brief::all();
        return response()->json($briefs);
    }

    public function show_brief_byId($id){
        $brief = Brief::where('id', $id)->first();
        $brief->tasks;
        $brief->tutor;

        return response()->json($brief);
    }

    // public function insert_brief(Request $req){
    //     $brief = new Brief();
    //     $brief->name = $req->name;
    //     $brief->description = $req->description;
    //     $brief->duration = $req->duration;
    //     // $brief-> = $req->livraison_date;

    //     $brief->save();
    //     return $brief;
    // }
}
