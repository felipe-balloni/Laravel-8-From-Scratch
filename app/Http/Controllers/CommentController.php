<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CommentController extends Controller
{
    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Post $post): \Illuminate\Http\RedirectResponse
    {
        request()->validate([
            'body' => 'required|min:5'
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return back()->with('success', 'Your comment has been posted.');
    }
}
