<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, "users_post", "post_id", "user_id")->withTimestamps();
    }

    protected $fillable = [
        'user_name',
        'title',
        'description',
        "profile_image",
        'post_image',
    ];

    protected $hidden = [
        "user_id",
    ];
}
