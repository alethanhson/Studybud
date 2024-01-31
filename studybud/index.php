<?php

// Category Model
public function posts()
{
    return $this->hasMany(Post::class);
}
// View. We can use
$category->posts->count();
// Or
$category->posts()->count();