<?php

namespace App\Models;

use App\Models\Compte;
use App\Models\User;
use App\Models\ClientAdresseCollect;
use App\Models\ClientAdresseLivraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    // setting models relations
    public function utilisateur(){

        return $this->hasOne(User::class, 'user_id', 'id');

    }

    public function clientAdresseCollects()
    {

        return $this->hasMany(ClientAdresseCollect::class);

    }

    public function clientAdresseLivraisons()
    {

        return $this->hasMany(ClientAdresseLivraison::class);

    }

    public function compte(){

        return $this->hasOne(Compte::class);

    }

}
