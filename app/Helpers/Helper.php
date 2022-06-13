<?php

namespace App\Helpers;

use App\Models\Artist;
use App\Models\Favourite;
use App\Models\Genre;
use App\Models\SavedPlaylist;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

CONST ADMIN_IMAGE_LINK = '';
CONST THUMB_DIR = '';
CONST IMAGE_LINK = '';


class Helper
{

    public static function format_image($image_name,$public=0){
        if(!empty($image_name))
        {
            $response_item = env('BASE_URL').'/admin/uploads/'.$image_name;
            if($public==1)
            {
                $response_item = env('BASE_URL').'/uploads/'.$image_name;
            }
        }
        else{
            $response_item = "https://iLyrics.org/uploads/download_(32).jpg";
        }
        
        return $response_item;
    }

    public static function format_track($track_name,$audio_type){
        if($audio_type == 1) {
            $audio_link = env('BASE_URL').'/admin/uploads/audio/'. $track_name;
         } else if($audio_type == 2){
            $audio_link = $track_name;
        }
        return $audio_link;
    }

    public static function isFavourite($track_id, $user_id = null, $favourite = false){
        if($favourite == 'test'){
            dd($track_id,$user_id);
        }
        if($user_id){
            $favourited = Favourite::where(
                [
                    ['track_id', '=', $track_id],
                    ['user_id', '=', $user_id],
                ])->first();
            $favourite_value =  $favourited ? 1 : 2;
        }
        else{
            $favourite_value =  $favourite ? 1 : 2;
        }
        return $favourite_value;        
    }

    public static function isSavedPlaylist($playlist_id)
    {
        return SavedPlaylist::where('playlist_id',$playlist_id)->where('user_id',Auth::user()->id)->count();
    }

    public static function getArtistName($artist_id)
    {
        if(is_null($artist_id)){ return '';}
        $artist = Artist::find($artist_id);
        if($artist){
            return $artist->name;
        }        
    }

    public static function getTagName($tag_id)
    {
        if(is_null($tag_id)){ return '';}
        $tag = Tag::find($tag_id);
        if($tag){
            return $tag->title;
        }        
    }

    public static function getGenreName($genre_id)
    {
        if(is_null($genre_id)){ return '';}
        $genre = Genre::find($genre_id);
        if($genre){
            return $genre->title;
        }        
    }

}