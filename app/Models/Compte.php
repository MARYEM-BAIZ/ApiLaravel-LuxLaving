<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compte extends Model
{
    use HasFactory;

    // setting models relations
    public function commandes(){

        return $this->hasMany(Commande::class);

    }

    public function client(){

        return $this->hasOne(Client::class, 'client_id', 'id');

    }
}
