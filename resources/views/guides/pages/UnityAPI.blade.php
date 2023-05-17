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
                                    <div class="panel-heading">Connecting to Laravel endpoints and retrieving database information with Unity and C#</div>
                                    <div id="test" class="panel-body">
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/unity/GameObjectWithScript.jpg") }}" alt="Card image cap">
<p>1.  Create a empty GameObject to the scene and add a new Script to the Object.</p>
                                        <p>2. Add using UnityEngine.Networking; to the script.</p>
                                        <p>3. in the start function create a StartCoroutine(function()); a function with IEnumerator instead of void.</p>
                                        <p>4. use UnityWebRequest and set its target URL to the string argument. </p>
                                        <hr>
                                        <p>Create a database and endpoint</p>
                                        <p>1. Create a Database that has a reference to the object such as image name.</p>
                                        <p>2. Create endpoint in Laravel, a page accessable that returns the database variables.</p>
                                        <p></p>




                                    </div>
                            </ul>
                            </li>
                        </div>

                    </div>
                </div>
@endsection