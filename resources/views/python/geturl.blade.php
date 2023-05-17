@extends('python.layouts.app')
@section('content')
<header>
{!! Form::open(['route' => 'python.returntext'])!!}

<div class="form-group" style="margin:0 75% 0 5%;">
    {!! Form::label ('www', 'enter url') !!}
    {!! Form::text('www', null, ['class' => 'form-control']) !!}

</div>
<div class="form-group" style="margin:0 75% 0 5%;">
    {!! Form::label ('file', 'enter file') !!}
    {!! Form::text('file', null, ['class' => 'form-control']) !!}

</div>
    <div class="form-group" style="margin:0 75% 0 5%;">
{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
    </div>
</header>
@endsection