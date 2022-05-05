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
        

        // $artist_id_arr = explode(",", $item->artists);
        // $artist_str = "";
        // $artist_arr = [];

        // $item->title = self::decode_entity($item->title);

        // foreach ($artist_id_arr as $inner_item){
        //     $artist = new Artist();
        //     $artist = $artist->where(["id" => trim($inner_item)])->one("id, name,image_name,resolution");
            

        //     if(!empty($artist)) {
        //         $artist_str .= $artist->name . ", ";
        //         $single_artist_arr["id"] = $artist->id;
        //         $single_artist_arr["name"] = self::decode_entity($artist->name);
        //         $single_artist_arr["image_name"] = $artist->image_name;
        //         array_push($artist_arr, $single_artist_arr);
        //     }
        // }

        // $item->create_property("encrypted", urlencode(Encryption::encrypt(ENCRYPTION_KEY, ENCRYPTION_IV, json_encode(["id" => $item->id]))));
        // $item->create_property("artist_array", $artist_arr);

        // $item->artists = substr($artist_str, 0, -2);;

        // $audio_link = "";
        // $duration  = 0;
        // if($item->audio_type == TRACK_TYPE_AUDIO) {
        //     $audio_link = ADMIN_AUDIO_LINK . '/'. $item->track_name;
        //     $duration = $item->track_duration;
        // } else if($item->audio_type == TRACK_TYPE_YOUTUBE){
        //     $audio_link = $item->audio_link;
        //     $duration = $item->remote_duration;
        // }

        // $item->audio_link = null;
        // $item->remote_duration = null;
        // $item->track_duration = null;
        // $item->track_name = null;
        // $item->tags = null;
        // $item->album = null;
        // $item->lyrics = null;
        // $item->genres = null;
        // $item->description = null;
        // $item->status = null;
        // $item->created = null;

        // $response_item = Helper::format_image($item);


        // $response_item['audio_link'] = $audio_link;
        // $response_item['audio_duration'] = $duration;

        // return $response_item;
    }

}