<?php

namespace App\Http\Controllers;

use App\Http\Resources\DiscussionResource;
use App\Http\Resources\PostResource;
use App\Models\Discussion;
Use App\Models\Post;
use Illuminate\Http\Request;

class DiscussionShowController extends Controller
{
    public function __invoke(Discussion $discussion){

        $discussion->load(['topic']);

        return inertia()->render('Forum/Show', [
            'discussion' => DiscussionResource::make($discussion),
            'posts' =>PostResource::collection(
                Post::whereBelongsTo($discussion)
                        ->with(['user', 'discussion'])
                        ->oldest()
                        ->paginate(10)
                )
        ]);
    }
}
