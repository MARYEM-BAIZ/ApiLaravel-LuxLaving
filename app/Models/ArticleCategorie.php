<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleCategorie extends Model
{
    use HasFactory;

    // setting models relations
    public function articles()
    {

        return $this->hasMany(Article::class);

    }
}
