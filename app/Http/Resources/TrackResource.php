<?php

namespace App\Http\Resources;
use App\Helpers\Helper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;


class TrackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id'            =>  $this->id,
            'audio_type'	=>  $this->audio_type,
            'title'	        =>  $this->title,
            'track_artists'	=>  $this->track_artists ?? '',
            'artist_id'	    =>  $this->artist_id,
            'view_count'	=>  $this->view_count,
            'resolution'	=>  $this->resolution,
            'contributor_id'=>  $this->contributor_id,
            'modified'	    =>  $this->modified,
            'album_year'	=>  $this->album_year,
            'track_duration'=>  $this->track_duration,
            'remote_duration'=> $this->remote_duration,
            'image_name'	=>  $this->image_name,
            'track_name'	=>  $this->track_name,
            'audio_link'    =>  $this->audio_link,
            'artist_name'   =>  $this->artist_name ?? '',
            'favourite'     => Helper::isFavourite($this->id,Auth::user()->id ?? null)
        ];
    }
}
