<?php

namespace Dralexsand\Posts\Http\Controllers;

use Dralexsand\Posts\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        if (count($posts) === 0) {
            $data = [
                ['title' => 'Times',],
                ['title' => 'Pravda',],
                ['title' => 'Guardian',],
                ['title' => 'London Times',],
                ['title' => 'Moscow News',],
            ];

            DB::table('posts')->insert($data);

            $posts = Post::get();
        }

        $config = config('posts');

        return view('posts::posts.index', [
            'posts' => $posts,
            'config' => $config
        ]);
    }
}
