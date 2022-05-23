<?php

namespace App\Models;

use App\Models\Prestation;
use App\Models\ArticleCategorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // setting models relations
    public function articleCategorie(){

        return $this->belongsTo(ArticleCategorie::class, 'article_cat', 'id');

    }

    public function prestation(){

        return $this->belongsTo(Prestation::class, 'prestation_id', 'id');

    }
}
