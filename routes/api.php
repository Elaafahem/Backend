<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\sCategorieController;
use App\Http\Controllers\ArticleController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get("/categories", [CategorieController::class, 'index']);
Route::post("/categories", [CategorieController::class, 'store']);
Route::get("/categories/{id}", [CategorieController::class, 'show']);
Route::delete("/categories/{id}", [CategorieController::class, 'destroy']);
Route::put("/categories/{id}", [CategorieController::class, 'update']);*/

Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('scategories', ScategorieController::class);
});
Route::get('/scat/{idcat}', [ScategorieController::class, 'showSCategorieByCAT']);
Route::middleware('api')->group(function () {
    Route::resource('articles', ArticleController::class);
});