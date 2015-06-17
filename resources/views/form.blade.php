@extends('app')

@section('content')

    @include('partials.error')
    {!! Form::open(['url' => 'store']) !!}
        {{--  email text field --}}
        <div class="form-group">
            {!! Form::label('email', 'Имаил') !!}
            {!! Form::text('email', '', ['class' => 'form-control']) !!}
        </div>
        {{--  Email_confirmed text field --}}
        <div class="form-group">
            {!! Form::label('email_confirmation', 'Повторите имаил') !!}
            {!! Form::text('email_confirmation', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('test', array('class' => 'form-control btn btn-success')) !!}
        </div>
    {!! Form::close() !!}
@endsection