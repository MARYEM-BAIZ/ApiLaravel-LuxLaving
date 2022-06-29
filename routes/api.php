<?php

use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\LivreurController;
use App\Http\Controllers\Api\UtilisateurController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });


// Public routes
Route::post('login', [AuthController::class, 'signin']);

Route::post('register', [AuthController::class, 'signup']);

Route::prefix('article')->group(function () {

    Route::get('articles', [ArticleController::class, 'index']);
    Route::post('store', [ArticleController::class, 'store']);
    Route::get('articlesByService/{id}', [ArticleController::class, 'articlesByService']);

});

Route::prefix('livreur')->group(function () {

    Route::get('livreurs', [LivreurController::class, 'index']);

});

Route::prefix('client')->group(function () {

    Route::get('clients', [ClientController::class, 'index']);

});


// Protected routes
Route::middleware('auth:sanctum')->group( function () {

    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/userss',function (Request $request) {
        $users = User::all();
        return $users;
    });


});


// Route::prefix('utilisateurs')->group(function () {

//     Route::post('/utilisateur/register',[UtilisateurController::class, 'register'])->name('utilisateur.register');

// });


// for test
Route::get('/users',function (Request $request) {
    $users = Utilisateur::all();
    return $users;
});
