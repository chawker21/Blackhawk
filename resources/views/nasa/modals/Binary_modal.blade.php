
<div style="display: inline-block; margin-top:4px; width: 100px; height: 100px; border: 1px solid #000;"><a class="col" data-toggle="modal" data-target="#BinaryModal{{$unicode->id}}" href="{{$unicode->route}}"><h1 style="text-align:center; color:#000;">{{$unicode->Character}}</h1></a></div>


<div class="modal fade" id="BinaryModal{{$unicode->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$unicode->Description}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 style="text-align:center;">{{$unicode->Character}}</h1><br>
                <h3>Unicode:  {{$unicode->Unicode}}</h3><br>
                <h3>HTML code:{{$unicode->HTML_Number}}</h3><br>
                <h3>Binary:   {{$unicode->utf_binary}}</h3><br>
                <p>ID:        {{$unicode->id}}</p>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>