@extends('Kali.layouts.app')

@section('content')
    @include('guides.partials._profile')

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"> Kali Guides</div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#KaliModal">
                        add Kali Guide
                    </button>

                    <!-- Modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="KaliModal" tabindex="-1" role="dialog" aria-labelledby="KaliModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="KaliModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                        {!! Form::open(['route' => 'Kali.store', 'class' => 'form']) !!}
                                        {!! Form::label('title', 'Your Title') !!}
                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                        {!! Form::label('body', 'description') !!}
                                        {!! Form::text('body', null, ['class' => 'form-control']) !!}
                                        {!! Form::label('keywords', 'keywords') !!}
                                        {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
                                        {!! Form::label('link', 'link') !!}
                                        {!! Form::text('link', null, ['class' => 'form-control']) !!}



                                        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>











        <div id="test" class="panel-body col-md-8">
            @foreach($kali as $kali)
                <div class=" alert alert-success border border-dark" style="font-weight:bold">
                    <p>{{$kali->keywords}}</p>
                    <p style="font-size:20px;">{{$kali->body}}</p>
                    <hr>
                    <a href="{{$kali->link}}">{{$kali->title}}</a>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection