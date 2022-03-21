<?php

namespace App\Helpers;

CONST ADMIN_IMAGE_LINK = '';
CONST THUMB_DIR = '';
CONST IMAGE_LINK = '';


class Helper
{

    public static function format_image($image_name,$public=0){
        // $image_name = $item['image_name'];
        // $item['image_name'] = null;

        if(!empty($image_name))
        {
            $response_item = request()->getSchemeAndHttpHost().'/admin/uploads/'.$image_name;
            // $response_item['thumb_link'] = ADMIN_IMAGE_LINK . THUMB_DIR . '/' . $image_name;
            // $response_item['image_link'] = ADMIN_IMAGE_LINK . $image_name;
            // if($public==1)
            // {
            //     $response_item['thumb_link'] = IMAGE_LINK . THUMB_DIR . '/' . $image_name;
            //     $response_item['image_link'] = IMAGE_LINK . $image_name;
            // }
        }
        else{
            $response_item = "https://iLyrics.org/uploads/download_(32).jpg";
            // $response_item['thumb_link'] = null;
            // $response_item['image_link'] = null;
        }
        
        return $response_item;
    }
}