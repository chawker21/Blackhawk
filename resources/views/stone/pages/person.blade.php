@extends('stone.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Stone
        </div>
    </header>


    <div class="modal-body">
        <div class="form-group" style="color:limegreen; font-size:25px; font-weight:bold;">
            {!! Form::open(['route' => 'stone.store', 'class' => 'form']) !!}
            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}

            {!! Form::label('middle_name', 'Middle Name') !!}
            {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}

            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
            {!! Form::label('born_name', 'Born Name') !!}
            {!! Form::text('born_name', null, ['class' => 'form-control']) !!}

            {!! Form::label('surname', 'surname') !!}
            {!! Form::text('surname', null, ['class' => 'form-control']) !!}
            {!! Form::label('birth_year', 'Year of Birth') !!}
            {!! Form::text('birth_year', null, ['class' => 'form-control']) !!}

            {!! Form::label('death_year', 'Year of Death') !!}
            {!! Form::text('death_year', null, ['class' => 'form-control']) !!}
            {!! Form::label('mother_id', 'mother_id') !!}
            {!! Form::text('mother_id', null, ['class' => 'form-control']) !!}
            {!! Form::label('father_id', 'father_id') !!}
            {!! Form::text('father_id', null, ['class' => 'form-control']) !!}
            {!! Form::label('spouse_id', 'spouse_id') !!}
            {!! Form::text('spouse_id', null, ['class' => 'form-control']) !!}
            {!! Form::label('child_id', 'child_id') !!}
            {!! Form::text('child_id', null, ['class' => 'form-control']) !!}
            {!! Form::label('sibling_id', 'sibling_id') !!}
            {!! Form::text('sibling_id', null, ['class' => 'form-control']) !!}
            <h3>Birth Location</h3>
            <input type="text" name="birth_location" style="margin: 20px 0;" class="form-control"
                   placeolder="Enter an address or zipcode"/>
            <h3>Death Location</h3>
            <input type="text" name="death_location" style="margin: 20px 0;" class="form-control"
                   placeolder="Enter an address or zipcode"/>


        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>

    <div class="container-sm">
        <div class="row">
            <div class="col-md-6">




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




            </div>
        </div>
    </div>


@endsection
