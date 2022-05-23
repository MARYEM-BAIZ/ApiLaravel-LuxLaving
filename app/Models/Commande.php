<?php

namespace App\Models;

use App\Models\Client;
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
    public function client(){

        return $this->belongsTo(Client::class, 'id', 'client_id');

    }

    public function clientAdresseLivraison(){

        return $this->hasOne(ClientAdresseLivraison::class, 'id', 'adresse_livraison_id');

    }

    public function clientAdresseCollect(){

        return $this->hasOne(ClientAdresseCollect::class, 'id', 'adresse_collecte_id');

    }

    public function paiement(){

        return $this->belongsTo(Paiement::class, 'commande_id', 'id');

    }

    public function livreur(){

        return $this->belongsTo(Livreur::class);

    }

    public function commandeStatut(){

        return $this->belongsTo(CommandeStatut::class);

    }

    public function commandeDetails()
    {

        return $this->hasMany(CommandeDetail::class);

    }
}
