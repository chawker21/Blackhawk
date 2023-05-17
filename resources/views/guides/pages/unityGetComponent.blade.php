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
                    <div class="panel-heading">Accessing Components, Variables, and other scripts in C#</div>
                    <div id="test" class="panel-body">
                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/unity/unitycomponent.jpg") }}" alt="Card image cap">
 <p>1. GetComponent is the primary way of accessing other components.  You can access builtin components or Scripts with this function<br>
     In this example i've assigned a "Transform Cube" Script to a Blue Cube (1).</p>
                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/unity/unityinitialize.jpg") }}" alt="Card image cap">
                        <p>2. This Example shows how to access the Renderer Component, The Renderer Component is what makes the Game Object visible on the screen, in this case
                            it is the Mesh Renderer, it has properties such as the color property available to it.
                            <br>
                            In order to prevent errors, [RequireComponent(typeof (Renderer))] will only execute this script if the renderer component is assigned to the game object.
                            This code prevents components from bieng removed that are required by the script.
                            <br>
                            3. Next calling the component (Renderer) and assigning it to a instance, convention is to use an underscore (_renderer).  This is what you use in the script
                            to transform the components properties.</p>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                            [RequireComponent(typeof(Renderer))]<br>

                            public class TransformCube : MonoBehaviour<br>
                            {<br>
                            Renderer _renderer;<br>

                            void start()<br>
                            {<br>
                            _renderer.material.color = Color.clear;<br>
                            }<br>
                            }<br>
                        </div>

<p>4.  Access the property you wish to transform by calling the initialized component and assigning the new property value to the property you are changing.
<br>Here I have changed the color property which is the "material" in the _renderer </p>
                        <hr>
                        <p>Another Example would be to switch the Gravity property off and on on a Game Object.  To do this the Object would need a Rigidbody component.</p>
                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/unity/rigidbody.jpg") }}" alt="Card image cap">
                        <p>as you can see, Rigidbody has the property "use Gravity" and it defaults to true. you could change this just by clicking on the checkbox or in script by calling
                        the Component.</p>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                            [RequireComponent(typeof(Rigidbody))]<br>

                            public class TransformCube : MonoBehaviour<br>
                            {<br>
                            private Rigidbody _rigidbody;<br>

                            void start()<br>
                            {<br>
                            _rigidbody.useGravity = false;<br>
                            }<br>
                            }<br>
                        </div>

                        <hr>
                        <p>Calling another Script</p>
                        <p>Say you have two blocks and you want to change their velocity when you press a button on the controller so that they both come together.  You can change
                        the velocity in the Rigidbody component but it would apply to all objects assigned to the script in the same way, so in order to have the velocities be opposite
                        you need to assign seperate scripts to each object, one to move it right, and one to move it left.  But the action of triggering the movement can be in the common
                        script.</p>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                            public class RightMove : MonoBehaviour<br>
                            {<br>
                            public Rigidbody _rightMove;<br>

                            public void awake()<br>
                            {<br>
                            _rightMove = GetComponent&ltRigidbody&gt();<br>
                                }<br>
                                public void Post ()<br>
                                {<br>
                                _rightMove.velocity = new Vector3(-3, 0, 0);<br>
                                }<br>
                                }<br>
                            </div>

                        <p>Here I set up what I want this object to do in a second script. I assign this to the right object on the screen and as you can see the velocity moves it to the left.
                        The velocity is activated by calling the function Post(), this is what I call in the "common" script to have each object move toward each other (assuming I do the same
                        for the left object changing the velocity to 3 instead of -3.</p>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                            public class TransformCube : MonoBehaviour<br>
                            {<br>
                            private RightMove _rightMove;<br>
                            private LeftMove _leftMove;<br>

                            void awake()<br>
                            {<br>
                            _rightMove = GetComponent&ltRightMove&gt();<br>
                                }<br>
                                void update()<br>
                                {<br>
                                if (OVRInput.Get(OVRInput.Button.One))<br>
                                {<br>
                                _rightMove.Post();<br>
                                _leftMove.Post();<br>

                                }<br>
                                }<br>
                                }<br>
                        </div>

                        <p>You call the script just like a regular component and initialize it with a variable you use elsewhere to call it. the function Post() is a property of the script and
                        is accessed just like any other property on the object.</p>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OsAyxNd2sQQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/92yX2VTLt9g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/YvA1O7MYs_w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
@endsection