<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Track;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artist';

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
