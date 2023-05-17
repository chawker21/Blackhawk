@extends('python.layouts.app')
@section('content')
    <header>
        <p style="margin:0 75% 0 5%;">Enter database, foldername, and table name to insert mp3 and mp4 in directory (recursively) into database</p>
        {!! Form::open(['route' => 'python.returnTwilight'])!!}

        <div class="form-group" style="margin:0 75% 0 5%;">
            {!! Form::label ('database', 'enter database (default=chawker21)') !!}
            {!! Form::text('database', 'chawker21', ['class' => 'form-control']) !!}

        </div>
        <div class="form-group" style="margin:0 75% 0 5%;">
            {!! Form::label ('path', "enter path (default=Twilight)") !!}
            {!! Form::text('path', 'Twilight', ['class' => 'form-control']) !!}

        </div>

        <div class="form-group" style="margin:0 75% 0 5%;">
            {!! Form::label ('table_name', 'enter table name (default=videos)') !!}
            {!! Form::text('table_name', 'videos', ['class' => 'form-control']) !!}

        </div>
        <div class="form-group" style="margin:0 75% 0 5%;">
            {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>
    </header>
@endsection