<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
        $produits =Produit::get();
        

        return view('produits.produit', compact('produits')); 
    }
}
