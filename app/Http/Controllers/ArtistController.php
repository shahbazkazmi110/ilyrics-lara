<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;
use App\Models\Track;
use App\Models\Genre;

class ArtistController extends Controller
{
    public function index()
    {

        // Popular Artist Query Added
        $data =  DB::table("artist")
        ->selectRaw('artist.id,artist.name,artist.resolution,artist.image_name,COUNT(track.artists) as count_art')
        // ->selectRaw('artist.id,artist.name,artist.resolution,artist.image_name,track.artists,COUNT(track.artists) as count_art')
        ->where('artist.status',1)
        ->join('track', 'track.artists', '=', 'artist.id')
        // ->join('track',DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.status',1)
        ->orderBy('artist.listening_count','DESC')
        ->groupBy("track.artists")
        ->limit(6)
        ->get();

        
        

        $multiplied = $data->map(function ($item, $key)
        {
            if (!empty($item->image_name))      // if not empty, then if condition works
            {
                //Helper::format_image($item->image_name);
                $item = json_decode(json_encode($item), true);
                array_merge($item, Helper::format_image($item));


                // dd(json_decode(json_encode($item), true));
                //dd(array_merge($item, Helper::format_image($item)));
                //collect($item)->merge(Helper::format_image($item));

                //dd($item);
            }
            return $item;
            
        });

        dd($multiplied);
        //dd($data);
        //Helper::format_image();


    }
}
