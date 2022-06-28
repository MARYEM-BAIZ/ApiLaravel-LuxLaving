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

    protected $fillable = ['label','description','prix','categorie_id','service_id','image'];

    // setting models relations
    public function articleCategorie(){

        return $this->hasOne(ArticleCategorie::class, 'categorie_id', 'id');

    }

    public function service(){

        return $this->hasOne(Service::class, 'service_id', 'id');

    }

    public function commandeDetails()
    {

        return $this->hasMany(CommandeDetail::class);

    }
}
