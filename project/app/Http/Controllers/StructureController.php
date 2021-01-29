<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;


class StructureController extends Controller
{

    public function index() {
        $structures = Structure::all();
        //dd($structures);
        return view('pages.structuresHome', compact('structures'));
    }

    public function show($id) {
        //dd($id);

        $structure = Structure::findOrFail($id);

        //dd($structure);

        return view('pages.structureProfile', compact('structure'));
        
    }  
}  
