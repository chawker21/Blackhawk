@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Inserting Text into blade</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                  <p>  public function index(Request $request)
                                    {</p>
                                    <p>  $welcome = file_get_contents('assets/MainWelcomeAlert.html');</p>

                                    <p>  return view('/index', compact('welcome'));</p>

                                    <h2>insert text file in the folder assets/MainWelcomeAlert.html</h2>
                                    <p> put this into blade<img src="{{'/app_resources/assets/img/welcomecode.jpg'}}"></p>


                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>

            </div>
        </div>
@endsection
