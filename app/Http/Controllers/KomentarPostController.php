<?php

namespace App\Http\Controllers;

use App\Models\CommentPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarPostController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        CommentPost::create([
            "post_id" => $request["kelasId"],
            "comment_by" => Auth::user()->id,
            "message" => $request["message"]
        ]);



        return back()->with('success', 'Komentar has been created');
    }
}
