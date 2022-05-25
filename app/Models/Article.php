<?php

namespace App\Models;

use App\Models\Service;
use App\Models\CommandeDetail;
use App\Models\ArticleCategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // setting models relations
    public function articleCategorie(){

        return $this->hasOne(ArticleCategorie::class, 'article_cat', 'id');

    }

    public function service(){

        return $this->hasOne(Service::class, 'prestation_id', 'id');

    }

    public function commandeDetails()
    {

        return $this->hasMany(CommandeDetail::class, 'adresse_livraison', 'id');

    }
}
