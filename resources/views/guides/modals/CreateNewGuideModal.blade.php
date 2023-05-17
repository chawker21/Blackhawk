<div class="modal fade" id="createGuideModal" tabindex="-1" role="dialog" aria-labelledby="createGuideModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createGuideModalLabel">Create New Guide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    {!! Form::open(['route' => 'guide.store', 'class' => 'form']) !!}
                    {!! Form::label('title', 'Your Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! Form::label('body', 'description') !!}
                    {!! Form::text('body', null, ['class' => 'form-control']) !!}
                    {!! Form::label('keywords', 'keywords') !!}
                    {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
                    {!! Form::label('link', 'link') !!}
                    {!! Form::text('link', null, ['class' => 'form-control']) !!}
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