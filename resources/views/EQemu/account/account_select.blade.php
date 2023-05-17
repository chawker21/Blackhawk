@extends('layouts.app')

@section('content')

    @foreach($accounts as $account)
        <div class="container">

            <div class="card">
                <h5 class="card-header">{{$account->charname}}</h5>
                <div class="card-body">
                    <h5 class="card-title">Account Name: {{$account->name}}</h5>
                    <form action="{{route('/EQemu/account/account_result')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <p>account ID: <input type="submit" name="id" value="{{$account->id}}"> Click to Return Data
                            about account {{$account->name}}</p>
                    </form>

                </div>
            </div>

        </div>
    @endforeach

@endsection