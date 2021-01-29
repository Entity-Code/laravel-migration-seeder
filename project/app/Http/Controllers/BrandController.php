<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mark;

class BrandController extends Controller
{
    //funzione che lista tutti gli elementi della tabella
    //e ci fa vedere solo i dettagli essenziali
    public function index() {
        //scaricamento dei dati brands
        $brands = Mark::all();
        //dd($brands);
        return view('pages.homeBrands', compact('brands'));
    } 

    //mostra tutte le informazioni dell'elemento cliccato dall'utente
    public function show($id) {
        //dd($id);

        //scarichiamo il singolo brand di cui stiamo parlando
        //va a cercare l'elemento Mark con quell'id, e se non lo trova da errore
        $brand = Mark::findOrFail($id);

        //dd($brand);

        return view('pages.brandProfile', compact('brand'));
        
    }
    
}
