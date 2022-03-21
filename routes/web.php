<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\TracksController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\{TracksController, HomeController};
 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/track', [TracksController::class, 'index']);
//require __DIR__.'/auth.php';


Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'getTracksByGenre'])->name('genre');

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tag/{id}', [TagController::class, 'getTracksByTag'])->name('tag');

Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/playlist', [PlaylistController::class, 'index']);
Route::get('/language', [LanguageController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);