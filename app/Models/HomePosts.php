<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePosts extends Model
{
    protected $fillable = [
      'title1','title2','title3', 'bc_img1','bc_img2','bc_img3'
    ];
}

