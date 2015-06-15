<?php

namespace App\Http\Controllers;

use App\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class TestController extends Controller
{

    public function index()
    {
        echo \Request::cookie('cookiename');
        return view('index', compact('name'));
    }

    public function model()
    {
        return view('test.model');
    }

    public function store(Request $request)
    {
        return redirect()
            ->action('TestController@index')
            ->withCookie(cookie('cookiename', 'value of my cookie'));
    }

    public function valid(Request $request)
    {
        $validator = $this->validate($request, []);

        if($validator->fails()){
            dd($validator->messages());
        }else{
            dd('Прошли проверку');
        }
    }
}
