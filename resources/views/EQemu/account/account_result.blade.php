@extends('layouts.app')

@section('content')



    <div class="container">

        <div class="card">
            <h5 class="card-header">Please Enter Account Info</h5>
            <div class="card-body">
                <h5 class="card-title">update Account ID: {{$account->name}}</h5>
                <form action="{{route('/EQemu/account/account_update', $account->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    Account Name:<input type="text" name="name" placeholder="{{$account->name}}" class="form-control">
                    Character Name:<input type="text" name="charname" placeholder="{{$account->charname}}"
                                          class="form-control">
                    Shared Plat:<input type="text" name="sharedplat" placeholder="{{$account->sharedplat}}"
                                       class="form-control">
                    password:<input type="text" name="password" placeholder="{{$account->password}}"
                                    class="form-control">
                    Character Status:<input type="text" name="status" placeholder="{{$account->status}}"
                                            class="form-control">
                    GM Speed: <input type="text" name="gmspeed" placeholder="{{$account->gmspeed}}"
                                     class="form-control">

                    <input type="submit" class="btn btn-primary">
                </form>


            </div>
        </div>
    </div>

@endsection