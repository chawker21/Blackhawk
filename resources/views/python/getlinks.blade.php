@extends('python.layouts.app')
@section('content')
    <header>
        <p style="margin:0 75% 0 5%;">Enter a URL and a short one word description here to get all the hyperlinks in the domain of the website</p>
        {!! Form::open(['route' => 'python.returnlinks'])!!}

        <div class="form-group" style="margin:0 75% 0 5%;">
            {!! Form::label ('www', 'enter home page') !!}
            {!! Form::text('www', null, ['class' => 'form-control']) !!}

        </div>
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