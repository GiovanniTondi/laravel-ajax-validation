<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{

    public function all() {

        $posts = Post::all();

        return response() -> json($posts);
    }
}
