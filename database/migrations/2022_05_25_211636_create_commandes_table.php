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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();

            $table->date('commande_date');
            $table->date('commande_collecte_date');
            $table->date('commande_livraison_date');
            $table->decimal('total');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedBigInteger('livreur_collecte_id');
            $table->foreign('livreur_collecte_id')->references('id')->on('livreurs');

            $table->unsignedBigInteger('livreur_livraison_id');
            $table->foreign('livreur_livraison_id')->references('id')->on('livreurs');

            $table->unsignedBigInteger('adresse_collecte_id');
            $table->foreign('adresse_collecte_id')->references('id')->on('client_adresse_collects');

            $table->unsignedBigInteger('adresse_livraison_id');
            $table->foreign('adresse_livraison_id')->references('id')->on('client_adresse_livraisons');

            $table->unsignedBigInteger('commande_statut_id');
            $table->foreign('commande_statut_id')->references('id')->on('commande_statuts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
