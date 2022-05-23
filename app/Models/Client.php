<?php

namespace App\Models;

use App\Models\Compte;
use App\Models\Utilisateur;
use App\Models\ClientAdresseCollect;
use App\Models\ClientAdresseLivraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    // setting models relations
    public function utilisateur(){

        return $this->hasOne(Utilisateur::class, 'id', 'user_id');

    }

    public function clientAdresseCollects()
    {

        return $this->hasMany(ClientAdresseCollect::class, 'adresse_collecte', 'id');

    }

    public function clientAdresseLivraisons()
    {

        return $this->hasMany(ClientAdresseLivraison::class, 'adresse_livraison', 'id');

    }

    public function compte(){

        return $this->hasOne(Compte::class, 'id', 'compte_id');

    }
}
