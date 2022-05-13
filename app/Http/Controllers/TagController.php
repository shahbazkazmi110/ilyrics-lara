<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Track;
use App\Models\Tag;

class TagController extends Controller
{
    
    // public function getTracksByTag($id)
    // {
    //     // First 6 tracks
    //     $data["tracks"] = Track::getAllTracks();
    //     $data["tags"] = Tag::orderBy('title', 'ASC')->get();
    //     $data["genres"] = Genre::getGenre();


    //     // All track matching with TAG_ID
    //     $data["tag_tracks"] = Track::select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 'track.view_count', 'track.resolution',
    //          'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 
    //          'artist.name AS artist_name', 'artist.image_name')
    //     ->join('artist', 'track.artists', '=', 'artist.id')
    //     ->where('track.tags', 'like', '%'.$id.'%')
    //     ->orderBy('track.created', 'DESC')
    //     ->get();


    //     // Tag Details
    //     $data["tag_detail"] = DB::table('tag')
    //     ->select('*')
    //     ->where('id', '=', $id)
    //     ->get();

    //     // Track count
    //     $tag_count = DB::table('tag')
    //     ->select('*')
    //     ->where('id', '=', $id)
    //     ->count();

    //     $data["tag_detail"]["count"] = $tag_count;

    //     return $data;
    // }
   
}
