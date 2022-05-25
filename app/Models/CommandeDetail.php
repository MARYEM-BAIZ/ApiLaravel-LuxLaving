<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandeDetail extends Model
{
    use HasFactory;

    // setting models relations
    public function commande(){

        return $this->hasOne(Commande::class, 'commande_id', 'id');

    }

    public function articles(){

        return $this->hasMany(Article::class, 'article_id', 'id');

    }
}
