<div class="modal" id="createTreeModal" tabindex="-1" role="dialog" aria-labelledby="createTreeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTreeModalLabel">Create New Guide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
