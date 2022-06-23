<?php

namespace App\Http\Controllers;

use App\Http\Resources\TrackResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Artist, Genre, Tag, Track};

class SearchController extends Controller
{
    public function search(Request $request){
       
        $keyword = $request->keyword ?? null;
        $artist_id = $request->artist_id ?? null;
        $genre_id = $request->genre_id ?? null;
        $tag_id = $request->tag_id ?? null;
        
        $data['tracks']  = Track::
        selectRaw('track.id,track.audio_type,track.title,GROUP_CONCAT(artist.name) as track_artists,track.view_count,track.resolution,track.contributor_id,track.modified,track.album_year,track.track_name,track.track_duration as audio_duration,track.remote_duration,track.audio_link,artist.id AS artist_id,artist.name AS artist_name,artist.image_name,artist.resolution as artist_resolution')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.status', 1)
       
        ->when(isset($keyword),function($query) use ($keyword){
            $query->where('track.title','LIKE','%'.$keyword.'%');
        })
        ->when((isset($keyword) && !isset($artist_id)),function($query) use ($keyword){
          
            $query->Orwhere('artist.name','LIKE','%'.$keyword.'%');
        })
        ->when(isset($artist_id),function($query) use ($artist_id){
            $query->whereRaw("find_in_set('".$artist_id."',track.artists)");
        })
        ->when(isset($genre_id),function($query) use ($genre_id){
                $query->whereRaw("find_in_set('".$genre_id."',track.genres)");
        })
        ->when(isset($tag_id),function($query) use ($tag_id){
            $query->whereRaw("find_in_set('".$tag_id."',track.tags)");
        })
        ->orderBy('track.title', 'ASC')
        ->groupBy('track.id')
        ->paginate(10);
        
        $data["keyword"] = $keyword; 
        $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();
        return view('search.search', $data);
    }

    public function searchRecieters(Request $request){
        if($request->keyword == ''){ return []; }
        return Artist::select('id','name')->where('name','LIKE','%'.$request->keyword.'%')->limit(10)->get();
    }

    public function searchGenres(Request $request){
        if($request->keyword == ''){ return []; }
        return Genre::select('id','title as name')->where('title','LIKE','%'.$request->keyword.'%')->limit(10)->get();
    }

    public function searchTags(Request $request){
        if($request->keyword == ''){ return []; }
        return Tag::select('id','title as name')->where('title','LIKE','%'.$request->keyword.'%')->limit(10)->get();
    }

    public function searchTracks(Request $request){
        $keyword = $request->keyword;
        if($keyword == ''){ return []; }
        return Track::select('track.title as name','track.id','artist.id as artist_id','artist.name as artist_name')->
        join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.title','LIKE','%'.$keyword.'%')
        ->orWhereHas('artist', function($q) use ($keyword){
            return $q->where('artist.name','like','%'. $keyword . '%');
       })->limit(15)->get();
    }

    
}
