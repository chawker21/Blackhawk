@extends('/ubot/layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Save Table to CSV in Ubot</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    <h1 style="color:cornflowerblue; margin-bottom:40px;">How to Save a Table to CSV in Ubot</h1>
                                    <h2 style="color:cornflowerblue;">save to file("{$special folder("Desktop")}\\yourtable.csv", &your table)</h2>


                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection


