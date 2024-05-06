<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends \Stephenjude\FilamentBlog\Models\Post
{
    use HasFactory;

    public function getRouteKeyName(): string {
        return 'slug';
    }
}
