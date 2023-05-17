@extends('ubots/layouts.app')

@section('content')
    @include('ubots.navbars.nav')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Creating a List</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    <p>Its a good idea to clear the list, this also initializes the list</p>
                                    <img class="" src="/ubot_resources/img/clearlist.jpg"  alt="set">
                                    <p>Then add list to list and scrape attribute, whatever is scraped will be added to the initialized list</p>
                                    <img class="" src="/ubot_resources/img/addlisttolist.jpg"  alt="set">
                                    <p>another way is to set the variable using scrape attribute to assign the value and then add list to list to scrape the variable result.</p>
                                    <img class="" src="/ubot_resources/img/set.jpg"  alt="set">
                                    <p>find regular expression is a good way to scrape the result from the variable</p>
                                    <img class="" src="/ubot_resources/img/findregularexpression.jpg"  alt="set">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection