@extends('ubots.layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Ubot</div>
                    <div class="form-group">
                        {!! Form::open(['route' => 'ubots.store', 'class' => 'form']) !!}
                        {!! Form::label('title', 'Your Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        {!! Form::label('body', 'description') !!}
                        {!! Form::text('body', null, ['class' => 'form-control']) !!}
                        {!! Form::label('keywords', 'keywords') !!}
                        {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
                        {!! Form::label('link', 'link') !!}
                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div id="test" class="panel-body">
            <div class="col-md-10 ">

                @foreach($ubot as $ubot)
                    <div class=" alert alert-success border border-dark" style="font-weight:bold">
                        <p>{{$ubot->keywords}}</p>
                        <p style="font-size:20px;">{{$ubot->body}}</p>
                        <hr>
                        <a href="{{$ubot->link}}">{{$ubot->title}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection