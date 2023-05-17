@extends('/congress/layouts.app')

@section('content')

    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <h1 class="panel-heading">House of Congress Daily Activity</h1>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    @foreach($passedlegislation as $passedlegislation)

                                        <h3 style="color:orange;">
                                            {{$passedlegislation->description}}</h3><br>
                                        <a href="{{$passedlegislation->link}}">Link</a><br>
                                        <hr>
                                    @endforeach



                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection