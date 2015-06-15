<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Главная страница
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('blog.index', compact('posts'));
    }

    /**
     * Страница новости
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('blog.show', compact('post'));
    }
}
