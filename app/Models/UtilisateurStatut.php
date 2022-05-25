<?php

namespace App\Models;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UtilisateurStatut extends Model
{
    use HasFactory;

    // setting models relations
    public function utilisateur(){

        return $this->belongsToMany(Utilisateur::class);

    }

}
