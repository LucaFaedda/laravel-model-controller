<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comics;

class ComicController extends Controller
{
    public function index(){

        $listaFooter = config('footer'); 
        $listaIcone = config('icons');
        $listaSocial= config('social');
        $prodotto = Comics::all();
        return view('home', compact('prodotto','listaFooter', 'listaIcone', 'listaSocial'));
    }
}
