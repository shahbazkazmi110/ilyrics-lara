<?php

namespace App\Helpers;

CONST ADMIN_IMAGE_LINK = '';
CONST THUMB_DIR = '';
CONST IMAGE_LINK = '';


class Helper
{

    public static function format_image($image_name,$public=0){
        if(!empty($image_name))
        {
            $response_item = request()->getSchemeAndHttpHost().'/admin/uploads/'.$image_name;
            if($public==1)
            {
                $response_item = request()->getSchemeAndHttpHost().'/uploads/'.$image_name;
            }
        }
        else{
            $response_item = "https://iLyrics.org/uploads/download_(32).jpg";
        }
        
        return $response_item;
    }
}