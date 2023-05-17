@extends('stone.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Stone
        </div>
    </header>


    <div class="container-sm">
        <div class="row">
            <div class="col-md-6">
                @foreach($person as $person)



                    <div class="card bg-primary"
                         style="padding:0 10px 15px 10px; background-size: 300px 180px;}}">
                        <div class="card-header bg-primary">
                            <h3>{{$person->first_name}} {{$person->middle_name}} {{$person->last_name}} {{$person->surname}}</h3>
                            <a class="btn border-success text-dark" style="font-weight: bold; margin: 0 0 10px 20px; background-size: 100px 60px;"  href="/stone/pages/{{$person->id}}">
                                <h3 style="font-weight: bold;">{{$person->id}}</h3></a>
                        </div>
                        <div class="card-body bg-info">
                            @if(isset($person->birthplace->state))
                                <h3>Born: {{$person->birth_year}}-{{$person->birthplace->county}}
                                    , {{$person->birthplace->state}}
                            @endif
                            @if(isset($person->deathplace->state))
                                Died:{{$person->death_year}}-{{$person->deathplace->county}}
                                    , {{$person->deathplace->state}}</h3>
                            @endif
                                @if(isset($person->mother->mother_id))
                                    <h3>
                                        Mother: {{$person->mother->first_name}} {{$person->mother->middle_name}} {{$person->mother->last_name}} {{$person->mother->surname}} ({{$person->mother->birth_year}}-{{$person->mother->death_year}})</h3>
                                @endif
                            @if(isset($person->father->father_id))
                                <h3>
                                    Father: {{$person->father->first_name}} {{$person->father->middle_name}} {{$person->father->last_name}} {{$person->father->surname}} ({{$person->father->birth_year}}-{{$person->father->death_year}})</h3>
                            @endif
                                @if(isset($person->spouse->spouse_id))
                                    <h3>
                                        Spouse: {{$person->spouse->first_name}} {{$person->spouse->middle_name}} {{$person->spouse->last_name}} {{$person->spouse->surname}} ({{$person->spouse->birth_year}}-{{$person->spouse->death_year}})</h3>
                                @endif

                        </div>
                    </div>



                @endforeach
            </div>
        </div>
    </div>


@endsection
