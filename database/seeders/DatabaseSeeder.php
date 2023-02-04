<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Categorie::factory()->count(4);

        User::factory()->count(3) /* Creation de 3 utilisateurs */

           

            ->has(Commande::factory()->count(1)/* Chaque utilisateur va avoir 1 commandes */

            ->hasAttached(Produit::factory()->count(4),/* hasAttached: enfant d'une relation many to many */ /* on crée 4 produits */

       ['prix_total'=>rand(100,500),'quantite_total'=>rand(1,3),]))
            ->create();
    }
}
