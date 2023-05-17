@extends('layouts.indexapp')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 " style="color:white">
                <div class="panel panel-default">

                    <center><h1>Create a new Guide.</h1></center>
                    <div class="form-group">
                        {!! Form::open(['route' => 'guide.store', 'class' => 'form']) !!}
                        {!! Form::label('title', 'Your Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        {!! Form::label('body', 'description') !!}
                        {!! Form::text('body', null, ['class' => 'form-control']) !!}
                        {!! Form::label('keywords', 'keywords') !!}
                        {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
                        {!! Form::label('link', 'link') !!}
                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
<br>


                        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection