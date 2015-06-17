<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function __construct()
    {
//        $this->middleware('auth', ['only' => 'create']);
//        $this->middleware('admin', ['only' => 'create']);
    }

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
    public function show($blog)
    {
        return view('blog.show', ['post' => $blog]);
    }

    public function create()
    {
        $tags = Tag::all()->lists('name', 'id');

        return view('blog.create', compact('tags'));
    }

    public function store(ArticleCreateRequest $request)
    {
        $post = new Post($request->all());

        $article = \Auth::user()->post()->save($post);

        $article->tags()->attach($request->input('tags'));

        return redirect()->route('blog');
    }
}
