@extends('app')

@section('content')
    <h1 class="page-header">Главная страница моего блога</h1>

    @foreach($posts as $post)
        <article>
            <h3>
                <a href="{{ route('blog.show', ['id'=> $post->id]) }}">{{ $post->title }}</a>
            </h3>
            <div>
                {{ $post->body }}
            </div>
        </article>
    @endforeach
@stop