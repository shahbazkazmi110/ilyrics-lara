<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tag';

    public static function getTags()
    {
        if (Cache::has('footer_tags')){
            $data = Cache::get('footer_tags');     						
        }else{
            $data = Tag::orderBy('title', 'ASC')->get();
            Cache::put('footer_tags', $data, now()->addWeeks(1));				
        }
        return $data;
    }
}
