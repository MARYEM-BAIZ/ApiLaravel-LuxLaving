<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientAdresseCollect extends Model
{
    use HasFactory;

    // setting models relations
    public function client(){

        return $this->belongsTo(Client::class, 'id', 'adresse_collecte');

    }
}
