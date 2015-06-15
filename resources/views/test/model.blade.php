@extends('app')

@section('content')
    <form enctype="multipart/form-data" action="{{ action('TestController@store') }}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="text" name="name" value="{{ old('name', 'test') }}"/><br/>
        <input type="text" name="email" value="{{ old('email') }}"/><br/>
        <input type="file" name="file"/>
       {{-- <input type="date" name="my_date"/><br/>--}}
        <input type="submit"/>
    </form>
@stop