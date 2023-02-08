<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\Categorie;

class ProduitController extends Controller
{
    public function index(){
        $produits =Produit::get();
        return view('produits.produit', compact('produits')); 
       
    }

    public function detail($id){

        $produits=Produit::Find($id);
        return view('produits.detail', compact('produits') );
    }

  

}
