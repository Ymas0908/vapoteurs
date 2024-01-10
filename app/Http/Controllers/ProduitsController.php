<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitsController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', ['produits' => $produits]);
    }

    public function create()
    {


        return view('produits.create');
    }


    public function show(Produit $produit)
{
    return view('produits.show', ['produit' => $produit]);
}



}

