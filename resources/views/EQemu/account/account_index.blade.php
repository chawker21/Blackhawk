@extends('layouts.app')

@section('content')

    @foreach($accounts as $account)
        <div class="container">

            <div class="card">
                <h5 class="card-header">{{$account->charname}}</h5>
                <div class="card-body">
                    <h5 class="card-title">account name: {{$account->name}}</h5>

                    <a href="{{ route('/EQemu/account/account_show', $account->id) }}"> {!! ucwords($account['name']) !!}</a>


                </div>
            </div>

        </div>
    @endforeach

@endsection