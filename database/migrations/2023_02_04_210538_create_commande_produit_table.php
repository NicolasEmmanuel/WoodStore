<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_produit', function (Blueprint $table) {
            $table->foreignId('commande_id');
            $table->foreignId('produit_id');
         /*    $table->foreignId('categorie_id'); */

            $table->integer('quantite_total');
            $table->integer('prix_total');

         /*    $table->foreignId('commande_id')->references('id')->on('commandes');
            $table->foreignId('produit_id')->references('id')->on('produits'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_produit');
    }
};