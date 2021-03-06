<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\{TracksController, HomeController, SearchController,AlbumController,PlaylistController,ArtistController,TagController,GenreController};
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () { 
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/my-collections', [HomeController::class, 'myCollection'])->name('my-collections');
    Route::post('/favorite/{track_id}', [TracksController::class, 'addFavorite'])->name('favorite');
    Route::post('/remove-favorite/{track_id}', [TracksController::class, 'removeFavorite'])->name('remove-favorite');
    Route::post('/add-playlist', [PlaylistController::class, 'addPlaylist'])->name('addPlaylist');
    Route::post('/update-playlist/{id}', [PlaylistController::class, 'updatePlaylist'])->name('updatePlaylist');
    Route::post('/delete-playlist/{id}', [PlaylistController::class, 'deletePlaylist'])->name('deletePlaylist');
    Route::post('/add-to-playlist/{track_id}/{playlist_id}', [PlaylistController::class, 'addToPlaylist'])->name('addToPlaylist');
    Route::get('/user-playlists', [PlaylistController::class, 'getUserPlaylists'])->name('user-playlists');
    Route::post('/save-playlist/{playlist_id}', [PlaylistController::class, 'savePlaylist'])->name('savePlaylist');
    Route::post('/remove-playlist/{playlist_id}', [PlaylistController::class, 'removePlaylist'])->name('removePlaylist');
    Route::post('/image_upload', [HomeController::class, 'uploadImage'])->name('image_upload');
    Route::post('/update_profile', [HomeController::class, 'uploadProfile'])->name('update_profile');
});
 
// Tracks
Route::get('/track', [TracksController::class, 'index'])->name('tracks');
Route::get('/track/{track_id}', [TracksController::class, 'getTrack'])->name('track-by-id');

// Artists
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


//Search
Route::get('/search', [SearchController::class, 'search'])->name('search');
// Route::get('/search/{keyword}', [SearchController::class, 'keyword'])->name('keyword');
Route::post('/search-recieters', [SearchController::class, 'searchRecieters'])->name('search-recieters');
Route::post('/search-genres', [SearchController::class, 'searchGenres'])->name('search-genres');
Route::post('/search-tags', [SearchController::class, 'searchTags'])->name('search-tags');
Route::post('/search-tracks', [SearchController::class, 'searchTracks'])->name('search-tracks');


Route::get('/language', [LanguageController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/about', function() {return view('links.about');});
Route::get('/accessibitiy', function() {return view('links.accessibitiy');});
Route::get('/terms', function() {return view('links.terms');});
Route::get('/privacy-policy', function() {
    return view('links.privacy-policy');
});

// Route::get('/', function () {
//     return view('welcome');
// });

require __DIR__.'/auth.php';



