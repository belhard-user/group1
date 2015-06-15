@extends('app')


@section('content')
    {!! Form::open(['action' => 'BlogController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Название новости') !!}
            {!! Form::text('title', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Сама новость') !!}
            {!! Form::textarea('body', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Дата') !!}
            {!! Form::input('date', 'published_at', date('d.m.Y'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Создать новость', array('class' => 'form-control btn btn-success')) !!}
        </div>
    {!! Form::close() !!}
@endsection