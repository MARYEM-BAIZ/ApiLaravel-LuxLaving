<?php

namespace App\Models;

use App\Models\Client;
use App\Models\UtilisateurStatut;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Model
{
    use HasFactory;

    // setting models relations
    public function utilisateurStatut(){

        return $this->belongsTo(UtilisateurStatut::class, 'statut_id', 'id');

    }

    public function client(){

        return $this->belongsTo(Client::class);

    }
}
