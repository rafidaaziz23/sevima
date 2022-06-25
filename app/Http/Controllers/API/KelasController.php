<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function renderKelas()
    {
        $post = Post::with('Postby')->with('Postkomen')->latest()->get();


        return response([
            'data' => $post
        ], 200);
    }
}
