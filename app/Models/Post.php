<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'title',
        'description',
        'post_image',
    ];

    protected $hidden=[
        "user_id",
    ];
}
