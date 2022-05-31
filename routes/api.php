<?php

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('utilisateurs')->group(function () {

    Route::post('/utilisateur/register',[UtilisateurController::class, 'register'])->name('utilisateur.register');

});

Route::get('/users',function (Request $request) {
    $users = Utilisateur::all();
    return $users;
});
