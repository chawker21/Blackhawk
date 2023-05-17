{!! Form::model($character_data, ['route' => ['/EQemu/character/character_edit', $character->id], 'files' => true])  !!}
{!! Form::hidden('_method', 'PATCH') !!}
{{ Form::label ('name', 'New Character name:') }}
{{ Form::text('name', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}

{!! Form::close() !!}