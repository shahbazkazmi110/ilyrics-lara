<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;


class Track extends Model
{
    use HasFactory;
    protected $table = 'track';

    public function track()
    {
        return $this->belongsTo(Artist::class);
    }
    
}
