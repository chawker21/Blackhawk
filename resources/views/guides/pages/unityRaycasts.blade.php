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
                            <div class="panel-heading">Basic Template</div>
                            <div id="test" class="panel-body">
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">

                                using UnityEngine;<br>

                                public class Gun : MonoBehaviour<br>
                                {<br>

                                public Camera PlayerCam;<br>
                                public float range = 100f;<br>

                                void Update ()<br>
                                {<br>
                                OVRInput.Update();<br>
                                if (OVRInput.Get(OVRInput.RawButton.RIndexTrigger))<br>
                                {<br>
                                Shoot();<br>
                                }<br>
                                }<br>
                                void Shoot()<br>
                                {<br>
                                RaycastHit hit;<br>
                                if (Physics.Raycast(PlayerCam.transform.position, PlayerCam.transform.forward, out hit, range))<br>
                                {<br>
                                Debug.Log(hit.transform.name);<br>
                                }<br>
                                }<br>
                                }<br>
                                </div>

                                <img class="card-img-height" src="{{asset("/guide_resources/assets/img/unity/crosshair.jpg") }}" alt="Card image cap">
<p>Two important things to note are assigning the render camera, in VR I assign the center eye anchor, and also the Plane Distance is how far away the crosshair is, if it is too far
then it wont collide with near objects. <br>
I also set it to Screen Space Camera on the Render Mode.</p>

                                <hr>
                                <h3>adding health and damage</h3>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">

                                    using UnityEngine;<br>

                                    public class Gun : MonoBehaviour<br>
                                    {<br>
                                    public float damage = 10f;<br>
                                    public Camera PlayerCam;<br>
                                    public float range = 100f;<br>

                                    void Update ()<br>
                                    {<br>
                                    OVRInput.Update();<br>
                                    if (OVRInput.Get(OVRInput.RawButton.RIndexTrigger))<br>
                                    {<br>
                                    Shoot();<br>
                                    }<br>
                                    }<br>
                                    void Shoot()<br>
                                    {<br>
                                    RaycastHit hit;<br>
                                    if (Physics.Raycast(PlayerCam.transform.position, PlayerCam.transform.forward, out hit, range))<br>
                                    {<br>
                                    Target target = hit.transform.GetComponent&ltTarget&gt();<br>
                                        if (target != null)<br>
                                        {<br>
                                        target.TakeDamage(damage);<br>
                                        }<br>
                                        }<br>
                                        }<br>
                                        }<br>
                                    </Div>
                                <p>Apply a Target Script to the GameObjects you want to interact with, This example considers pulling the trigger as shooting a gun.</p>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    using UnityEngine;<br>

                                    public class Target : MonoBehaviour<br>
                                    {<br>

                                    public float health = 50f;<br>

                                    public void TakeDamage(float amount)<br>
                                    {<br>
                                    health -= amount;<br>
                                    if (health <= 0f)<br>
                                    {<br>
                                    Die();<br>
                                    }<br>
                                    }<br>

                                    void Die()<br>
                                    {<br>
                                    Destroy(gameObject);<br>
                                    }<br>
                                    }<br>
                                </div>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/THnivyG0Mvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


                            </div>
                    </ul>
                    </li>
                </div>

            </div>
        </div>
@endsection