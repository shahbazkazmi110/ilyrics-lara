<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Test;

class Test2 extends Model
{
    use HasFactory;

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
