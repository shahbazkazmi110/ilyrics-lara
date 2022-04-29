<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\TracksController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\{TracksController, HomeController, SearchController};
 


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

// Tracks
Route::get('/track', [TracksController::class, 'index'])->name('tracks');
Route::get('/track/{id}', [TracksController::class, 'getTracks'])->name('tracks-by-id');

// Artists
//Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/reciter/{id}', [TracksController::class, 'getTracksByArtist'])->name('tracks-by-artist');
Route::get('/reciters', [ArtistController::class, 'getAllArtists'])->name('reciters');


// Genre
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'getTracksByGenre'])->name('genre');

// Tags
Route::get('/tags', [TagController::class, 'index']);
Route::get('/tag/{id}', [TracksController::class, 'getTracksByTag'])->name('tracks-by-tag');


// Playlist
// Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists');
Route::get('/playlist/{id}', [TracksController::class, 'getTracksByPlaylist'])->name('tracks-by-playlist');
Route::get('/playlists', [PlaylistController::class, 'getAllPlaylists'])->name('playlists');

Route::get('/language', [LanguageController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/search', [SearchController::class, 'search_action'])->name('search_action');

//Route::view('/about', 'views/about.php', 'about');

Route::get('/about', function() {return view('links.about');});
Route::get('/accessibitiy', function() {return view('links.accessibitiy');});
Route::get('/terms', function() {return view('links.terms');});
Route::get('/privacy-policy', function() {
    return view('links.privacy-policy');
});



