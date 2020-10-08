<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        return view('index');
    }

    public function show($id) {

        $post = Post::findOrFail($id);

        return view('post-show', compact('post'));
    }

    public function create() {

        return view('post-create');
    }

    public function save(Request $request) {

        $data = $request -> validate([
            'title'         => 'required',
            'description'   => 'required|min:5',
            'like'          => 'required|gte:0'
        ]);

        $data['user_id'] = 1; // utente default

        $post = Post::create($data);

        return redirect() -> route('post-index');
    }

    public function edit($id) {

        $post = Post::findOrFail($id);

        return view('post-edit', compact('post'));
    }

    public function update(Request $request, $id) {

        $data = $request -> validate([
            'title'         => 'required',
            'description'   => 'required|min:5',
            'like'          => 'required|gte:0'
        ]);

        $post = Post::findOrFail($id);

        $post -> update($data);

        return redirect() -> route('post-show', $id);
    }
}
