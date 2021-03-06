<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'track_count'   => $this->track_count,
            'resolution'    => $this->resolution,
            'thumb_link'    => env('BASE_URL').'/admin/uploads/thumb/'.$this->image_name ?? '',
            'image_link'    => env('BASE_URL').'/admin/uploads/'.$this->image_name ?? '',
         ];
    }
}
