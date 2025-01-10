<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate(['comment' => 'required']);

        Comment::create([
            'post_id' => $postId,
            'user_id' => Auth::id(), // Null if guest.
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Comment added successfully!');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $this->authorize('delete', $comment); // Policy check.
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully!');
    }
}

