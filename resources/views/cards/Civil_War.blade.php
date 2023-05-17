@extends('cards/layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container-fluid col-md-8">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">The Civil War</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <ul>
                                        <li>
                                            <h3>The Civil War - The Confederacy</h3>
                                            <iframe style="width: 100%; height: 820px"
                                                    src="{{URL::to('/')}}/card_resources/Civil/Confederate/The_Confederacy.pdf#page=2"></iframe>
                                        </li>



                                    </ul>
                                </div>
                            </div>

                    </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection
