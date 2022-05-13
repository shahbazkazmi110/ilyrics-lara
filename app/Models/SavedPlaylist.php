<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedPlaylist extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'saved_playlist';
    protected $fillable = [
        'user_id','playlist_id','created'
    ];
}
