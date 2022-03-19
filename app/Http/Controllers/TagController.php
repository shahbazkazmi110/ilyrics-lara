<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = DB::table('tag')->get();
        return $tags;
    }
   
}
