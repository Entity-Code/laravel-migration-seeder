<?php

namespace App\Http\Controllers;

use App\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index() {

        //in una variabile salviamo tutti i dati

        $workers = Worker::all();

        //dd($workers);

        return view('pages.workersHome', compact('workers'));
    }

    public function show($id) {

        $worker = Worker::findOrFail($id);

        return view('pages.workerProfile', compact('worker'));
    } 
}
