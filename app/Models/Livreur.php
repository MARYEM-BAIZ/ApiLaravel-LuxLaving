<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livreur extends Model
{
    use HasFactory;

    // setting models relations
    public function commandes()
    {

        return $this->hasMany(Commande::class);

    }
}
