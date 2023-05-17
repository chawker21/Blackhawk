@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Unity Transform</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    public class TransPos : MonoBehaviour<br>
                                    {<br>
                                    private Vector3 tempPos;<br>

                                    // Use this for initialization<br>
                                    void Start ()<br>
                                    {<br>

                                    tempPos = transform.position;<br>
                                    }<br>

                                    // Update is called once per frame<br>
                                    void Update ()<br>
                                    {<br>
                                    tempPos.x +=.005f;<br>

                                    transform.position = tempPos;<br>
                                    }<br>
                                    }<br>

                                </div>

                                <p>First Apply a Vector3 under the class and assign it to a temporary object, In this case tempPos is the temporary variable that stores the Vector3 data.
                                Vector3 stores an X, Y, and Z component so we put those components into tempPos</p>

                                <p>Next in the start function you initialize the temporary variable to = the property you want to change, in this case it is the position property.</p>
                                <p>Then in update you can get further details about the property, here we have applied a change specifically to the x cooridinate of the position property.
                                </p>
                                <p>Finally you apply the updated temp variable to the property you changed, this is because all we changed was the x variable in a x y z data set, so we
                                apply the change to the whole.</p>
                            </div>
                            <a href="https://docs.unity3d.com/ScriptReference/Transform.html" target="_blank">unity Reference</a>
                            <hr>
                            <p>you tube reference</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9yrUCs5l_6k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <p>advanced Vector Math</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/7DK8aA2qee8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </ul>
                    </li>
                </div>

            </div>
        </div>
@endsection