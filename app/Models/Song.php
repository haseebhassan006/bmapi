<?php

namespace App\Models;

use App\Models\Singer;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function singer(){
        return $this->belongsTo(Singer::class);
    }
}
