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
                                <h3>Teleporting using Raycast</h3>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    using UnityEngine;<br>

                                    public class Teleport : MonoBehaviour<br>
                                    {<br>
                                    private RaycastHit hit;<br>
                                    public Camera PlayerCam;<br>
                                    public float range = 100f;<br>
                                    void Update()<br>
                                    {<br>
                                    if (OVRInput.GetDown(OVRInput.Button.One))<br>
                                    {<br>
                                    if (GetLookedAtObject()!=null)<br>
                                    TeleportToPosition();<br>
                                    }<br>
                                    }<br>
                                    private GameObject GetLookedAtObject()<br>
                                    {<br>
                                    Vector3 origin = transform.position;<br>
                                    Vector3 direction = PlayerCam.transform.forward;<br>
                                    if (Physics.Raycast(origin, direction, out hit, range))<br>
                                    return hit.collider.gameObject;<br>
                                    else<br>
                                    return null;<br>
                                    }<br>
                                    private void TeleportToPosition()<br>
                                    {<br>
                                    transform.position =  hit.point + hit.normal * 2;<br>
                                    }<br>
                                    }<br>
                                </div>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/au2Fyq9wX48" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                    </ul>
                    </li>
                </div>

            </div>
        </div>
@endsection