<?php

namespace App\Http\Controllers;

use App\Http\Resources\TrackResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\Track;

class GenreController extends Controller
{

    public function getTracksByGenre($id, Request $request)
    {
       $data['tracks'] = Track::selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id,track.modified, track.album_year, track.track_duration, track.remote_duration, track.audio_link,artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
       ->join('artist', 'track.artists', '=', 'artist.id')
       ->where('track.status',1)
       ->where('track.genres', 'like', '%'.$id.'%')
       ->orderBy('track.created', 'DESC')
       ->paginate(10);

      //  $data['tracks'] = TrackResource::collection($tracks)->response()->getData(true);
      //  if ($request->ajax()) {
      //    return  $data;
      //  }

       // Genre_detail
       $data["genre_detail"] = Track::selectRaw('genre.id, genre.title, COUNT(track.genres) as count')
       ->join('genre', DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
       ->where('track.status', 1)
       ->where('genre.id', 'LIKE', '%'.$id.'%')
       ->first();

       // Tag Related (but no limit() or pagination used)
       $data["tag_related"] = Track::select('tag.id','tag.title', 'tag.admin_id', 'tag.created')
       ->join('tag',DB::raw("FIND_IN_SET(tag.id,track.tags)"),'>',DB::raw("'0'"))
       ->where('genres', 'like', '%'.$id.'%')
       ->where('status',1)
       ->orderBy('tag.title', 'ASC')
       ->groupBy('tag.id')
       ->get();
        
      $data["tags"] = Tag::getTags();
       $data["genres"] = Genre::getGenre();

       //return $data;
       return view('genre.genres',$data);

    }

}
