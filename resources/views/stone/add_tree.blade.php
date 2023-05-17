@extends('stone.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Stone
        </div>
    </header>

    <div class="container-sm">
        <div class="row">
            <div class="col-md-4" style="margin-left:400px;">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3>Add New Person Information</h3>
                    </div>
                    <div class="card-body bg-info">
                        <div class="form-group" style="color:darkslategray; font-size:25px; font-weight:bold;">
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

                        </div>
                    </div>
                </div>
            </div>


                                <div class="col-md-4" style="margin-left:20px;">
                                    <div class="card">
                                        <div class="card-header bg-primary">
                                            <h3>Add ids and birth/death county, state</h3>
                                        </div>
                                        <div class="card-body bg-info">
                                            <div class="form-group" style="color:darkslategray; font-size:25px; font-weight:bold;">
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

                <div class="card-footer bg-primary">

                    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                    {!! Form::close() !!}
                </div>
                </div>
            </div>

    </div>



@endsection
