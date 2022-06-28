<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Article::all(),200)->header('message','all articles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' => 'required|max:255',
            'description' => 'required|max:255',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|integer',
            'service_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
          ]);

          // image's path
          $original_name =  $request->image->getClientOriginalName();

          $filename =  pathinfo($original_name,PATHINFO_FILENAME);

          $extension =  $request->image->getClientOriginalExtension();

          $filename_store = $filename.time().'.'.$extension;

          $request->image->move('images', $filename_store);

          // saving the article
          $article = new Article;

          $article->label = $request->label;
          $article->description = $request->description;
          $article->prix = $request->prix;
          $article->image = 'images/' .$filename_store ;
          //$article->image = $request->image ;
          $article->categorie_id = $request->categorie_id;
          $article->service_id = $request->service_id;
          $article->save();

        return response()->json($article, 201)->header('message', 'article added succesfly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * selecting articles by service.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function articlesByService($id)
    {
        $articles = Article::all()->where('service_id', $id);

        return response()->json($articles,200)->header('message','all the articles selected by service');
    }
}
