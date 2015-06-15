@extends('app')

@section('title', $post->title)

@section('content')
    <article>
        <h3>
            {{ $post->title }}
            <span class="label label-default">{{ $post->updated_at->diffForHumans() }}</span>
        </h3>
        <div>
            {{ $post->body }}
        </div>
    </article>
@stop