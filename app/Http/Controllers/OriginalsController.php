<?php

namespace App\Http\Controllers;

use App\Models\Post;

class OriginalsController
{
    public function __invoke()
    {
        $posts = Post::query()
            ->published()
            ->originalContent()
            ->simplePaginate(20);

        return view('front.originals.index', compact('posts'));
    }
}
