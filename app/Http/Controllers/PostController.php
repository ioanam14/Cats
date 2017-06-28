<?php

namespace App\Http\Controllers;

use App\PostModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $posts = PostModel::paginate(3);
        return view('post/show', compact('posts'));
    }

    public function getPost ()
    {
        return view('post/add');
    }

    public function addPost (Request $request)
    {
        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');

        $post = new PostModel();
        $post->fill($data);
        $post->save();

        return view ('post/succes');
    }
}
