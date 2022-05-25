<?php

namespace App\Models;

use App\Models\Compte;
use App\Models\Livreur;
use App\Models\Paiement;
use App\Models\CommandeDetail;
use App\Models\CommandeStatut;
use App\Models\ClientAdresseCollect;
use App\Models\ClientAdresseLivraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    // setting models relations
    public function compte(){

        return $this->hasOne(Compte::class);

    }

    public function clientAdresseLivraison(){

        return $this->hasOne(ClientAdresseLivraison::class, 'adresse_livraison_id', 'id');

    }

    public function clientAdresseCollect(){

        return $this->hasOne(ClientAdresseCollect::class, 'adresse_collecte_id', 'id');

    }

    public function paiement(){

        return $this->hasOne(Paiement::class);

    }

    public function livreurCollect(){

        return $this->hasOne(Livreur::class, 'livreur_collecte_id', 'id');

    }

    public function livreurLivraison(){

        return $this->hasOne(Livreur::class, 'livreur_livraison_id', 'id');

    }

    public function commandeStatut(){

        return $this->hasOne(CommandeStatut::class, 'commande_statut_id', 'id');

    }

    public function commandeDetails()
    {

        return $this->hasMany(CommandeDetail::class);

    }
}
