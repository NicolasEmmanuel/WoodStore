<?php

namespace App\Models;

use App\Models\Commande;
use App\Models\Categorie;
use Attribute;
use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    public function commandes(){
        return $this->belongsToMany(Commande::class)
        ->withPivot('quantite_total', 'prix_total');
    }

    public function categories(){
        return $this->hasOne(Categorie::class);
        
    }


    /* public function price(){
        return Attribute::make(get: fn($value)=> str_replace('.',',', $value/100) . '€');
        
    } */



}
