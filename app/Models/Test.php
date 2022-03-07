<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Test2;

class Test extends Model
{
    use HasFactory;

    public function test2()
    {
        return $this->belongsTo(Test2::class);
    }
}
