<?php

namespace App\Http\Controllers;

use App\Http\Resources\TrackResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Artist, Genre, Tag, Track};

class SearchController extends Controller
{
    //

    public function search(Request $request){
        // dd($request->all());
        $artist_id = $request->artist_id ?? null;
        $genre_id = $request->genre_id ?? null;
        $tag_id = $request->tag_id ?? null;
        
        $tracks = Track::
        // select('track.id', 'track.audio_type', 'track.title','track.artists',  'track.view_count', 'track.resolution', 
        //         'track.contributor_id', 'track.modified', 'track.album_year', 'track.track_name', 'track.track_duration as audio_duration',
        //         'track.remote_duration', 'track.audio_link', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name',  'artist.resolution as artist_resolution')
        
        select('track.id', 'track.audio_type', 'track.title','track.artists',  'track.view_count', 'track.resolution', 
                'track.contributor_id', 'track.modified', 'track.album_year', 'track.track_name', 'track.track_duration as audio_duration',
                'track.remote_duration', 'track.audio_link', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name',  'artist.resolution as artist_resolution')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('artist.name','LIKE',$request->recieter)
        ->where('track.status', 1)
        ->when(isset($artist_id),function($query) use ($artist_id){
            $query->whereRaw("find_in_set('".$artist_id."',track.artists)");
        })
        ->when(isset($genre_id),function($query) use ($genre_id){
                $query->whereRaw("find_in_set('".$genre_id."',track.genres)");
        })
        // ->when(isset($tag_id),function($query) use ($tag_id){
        //     $query->whereRaw("find_in_set('".$tag_id."',track.tags)");
        // })
        ->orderBy('track.title', 'ASC')
        ->paginate(10);
       
       $data['tracks'] = TrackResource::collection($tracks)->response()->getData(true);
       if ($request->ajax()) {
            return $data;
        }

        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
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


    public function getTracks(Request $request)
    {
        $track_list = Track::        
        // select('track.id', 'track.audio_type', 'track.transliteration', 'track.transliteration_type', 'track.title', 'track.artists', 
        // 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'track.track_name',
        // 'track.track_duration as audio_duration',  'track.remote_duration', 'track.audio_link',
        // 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name',  'artist.resolution as artist_resolution')//, 'favourite.user_id') 
        selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
                    track.modified, track.album_year, track.track_duration as audio_duration, track.remote_duration, track.audio_link,
                    artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
       //->join('artist', 'track.artists', '=', 'artist.id')
       //->whereNotNull('track.album_year')
       ->where('track.status', 1)
       ->orderBy('track.title', 'ASC')
       ->paginate(10);
       
       
       if ($request->ajax()) {

        return $track_list;
        // $view = view('artist.artist-track-pagination',$data)->render();
        // return response()->json(['html'=>$view]);
        //   return  $data["artists"];
        }
       return $track_list;
    }

    public function getTrackByID($id)
    {
        $data["track"] = Track::
        select('track.id', 'track.title', 'track.lyrics','track.artists', 'track.genres', 'track.tags', 'track.view_count',
                 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'track.track_name', 'track.transliteration', 
                 'track.track_duration as audio_duration', 'track.audio_type', 'track.remote_duration', 'track.audio_link',
                 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name',  'artist.resolution as artist_resolution'
                )
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.id', '=', $id)
        ->where('track.status', 1)
        ->first();
    }

// Search By Artist
    public function getTracksByReciter($artist){
        $tracks = Track::
        selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
                track.modified, track.album_year, track.track_duration as audio_duration, track.remote_duration, track.audio_link,
                artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.status', 1)
        ->where('artist.name', 'LIKE', '%' . $artist . '%')
        ->orderBy('track.title', 'ASC')
        ->get();

        return $tracks;
    }
// Search By Genre
    public function getTracksByGenre($genre)
    {
        $tracks = Track::
        selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
                track.modified, track.album_year, track.track_duration as audio_duration, track.remote_duration, track.audio_link,
                artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id, track.artists)"),'>',DB::raw("'0'"))
        ->join('genre', DB::raw("FIND_IN_SET(genre.id, track.genres)"),'>',DB::raw("'0'"))
        ->where('track.status', 1)
        ->where('genre.title', 'LIKE', '%' . $genre . '%')
        ->orderBy('track.title', 'ASC')
        ->get();

        return $tracks;
    }
    

// Search By Tag
    public function getTracksByTag($tag)
    {
        $tracks = Track::
        selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
                track.modified, track.album_year, track.track_duration as audio_duration, track.remote_duration, track.audio_link,
                artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id, track.artists)"),'>',DB::raw("'0'"))
        ->join('tag', DB::raw("FIND_IN_SET(tag.id, track.tags)"),'>',DB::raw("'0'"))
        ->where('track.status', 1)
        ->where('tag.title', 'LIKE', '%' . $tag . '%')
        ->orderBy('track.title', 'ASC')
        ->get();

        return $tracks;
    }



}





// Track::selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
//                     track.modified, track.album_year, track.track_duration as audio_duration, track.remote_duration, track.audio_link,
//                     artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')