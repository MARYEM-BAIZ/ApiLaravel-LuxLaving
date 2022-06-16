<?php

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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


 Route::post('login', [AuthController::class, 'signin']);
 Route::post('register', [AuthController::class, 'signup']);

// Route::middleware('auth:sanctum')->group( function () {
//     Route::resource('products', ProductController::class);
// });
// Route::prefix('utilisateurs')->group(function () {

//     Route::post('/utilisateur/register',[UtilisateurController::class, 'register'])->name('utilisateur.register');

// });

 Route::get('/users',function (Request $request) {
     $users = Utilisateur::all();
     return $users;
 });
