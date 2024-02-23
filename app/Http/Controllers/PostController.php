<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;

class PostController extends Controller
{
    public function index() {

        $posts = Post :: all();

        return view('pages.posts.index', compact('posts'));
    }
    public function create() {

        $users = User :: all();
        $tags = Tag :: all();

        return view('pages.posts.create', compact('users', 'tags'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        $user = User :: find($data['user_id']);

        $post = new Post();

        $post -> title = $data['title'];
        $post -> body = $data['body'];

        $post -> user() -> associate($user);

        $post -> save();

        $post -> tags() -> attach($data['tag_id']);

        return redirect() -> route('post.index');
    }

    public function edit($id) {

        $post = Post :: find($id);

        $users = User :: all();
        $tags = Tag :: all();

        return view('pages.posts.edit', compact('post', 'users', 'tags'));
    }
    public function update(Request $request, $id) {

        $data = $request -> all();

        $user = User :: find($data['user_id']);

        $post = Post :: find($id);

        $post -> title = $data['title'];
        $post -> body = $data['body'];

        $post -> user() -> associate($user);

        $post -> save();

        $post -> tags() -> sync($data['tag_id']);

        return redirect() -> route('post.index');
    }
}
