@extends('python.layouts.app')
@section('content')
    <header>
        <p>Enter a filename here to get save the hyperlinks of the website</p>
        {!! Form::open(['route' => 'python.savelinks'])!!}

        <div class="form-group" style="margin:0 75% 0 5%;">
            {!! Form::label ('file', 'enter project name') !!}
            {!! Form::text('file', null, ['class' => 'form-control']) !!}

        </div>
        <div class="form-group" style="margin:0 75% 0 5%;">
            {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
        </div>
    </header>
@endsection