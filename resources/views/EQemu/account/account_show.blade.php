@extends('layouts.app')

@section('content')
    {!! Form::model($account, ['route' => ['/EQemu/account/account_update', $account->id]])  !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @csrf
    <div class="card-group">
        <div class="card cardshadow text-white bg-dark mb-3" style="max-width: 30rem; margin-left:15px;">
            <div class="card-header " style="font-size:22px; color: #5075e3 ">Account: {{$account->name}}</div>
            <div class="card-body">
                <h4 class="card-title" style="color:orange;">log out of game and back in to update<br>
                    <hr>


                    Name:
                    {{ Form::text('name', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    Character Name:
                    {{ Form::text('charname', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    Shared Platinum:
                    {{ Form::text('sharedplat', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}

                   Status:
                    {{ Form::text('status', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    GM speed:
                    {{ Form::text('gmspeed', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                </h4>
            </div>
        </div>

            {{ Form::submit ('update', ['class' => 'btn btn-success  btn-xs']) }}
            {!! Form::close() !!}
        </div>



@endsection