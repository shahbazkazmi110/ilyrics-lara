<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Track;

class ArtistController extends Controller
{
    public function index()
    {
        //dd(Artist::all(), 'Artist');
        $tracks = Track::find(1)->track;
 
        foreach ($track as $tracks) 
        {
            //
            dd(Artist::all(), 'Artist');
        }
    }
}
