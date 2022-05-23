<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandeDetail extends Model
{
    use HasFactory;

    // setting models relations
    public function commande(){

        return $this->belongsTo(Commande::class);

    }
}
