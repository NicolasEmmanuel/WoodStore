<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function accueil(){
        $categories =Categorie::get();
        return view('Accueil', compact('categories')); /* 'Accueil' : emplacement de la vue
                                                            compact('categories)= Crée un tableau à partir de variables et de leur valeur  */
    }
    
}
