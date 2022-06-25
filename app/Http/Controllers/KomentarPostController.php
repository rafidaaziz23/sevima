<?php

namespace App\Http\Controllers;

use App\Models\CommentPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarPostController extends Controller
{
    public function store(Request $request)
    {
        CommentPost::create([
            "post_id" => $request["post_id"],
            "comment_by" => 1,
            "message" => $request["message"]
        ]);

        return back()->with('success', 'Komentar has been created');
    }
}
