<?php

namespace App\Helpers;

use App\Models\Favourite;

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

}