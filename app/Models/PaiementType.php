<?php

namespace App\Models;

use App\Models\Paiement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaiementType extends Model
{
    use HasFactory;

    // setting models relations
    public function paiements()
    {

        return $this->hasMany(Paiement::class);

    }
}
