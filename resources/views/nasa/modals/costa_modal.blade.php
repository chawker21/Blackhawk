<a type="button"  onmouseover="setRandomColor{!! $link->id!!}()" class="btn btn-color" id="colorpad{{$link->id}}" data-toggle="modal" data-target="#costaModal" href="{{$link->route}}">{{$link->link}}</a>
<div class="modal fade" id="costaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">360 Pictures and Videos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="links">
                    @foreach($costas as $costa)

                        <a href="/costa/{{$costa->title}}"><ul><li><h2>{{$costa->title}}</h2></li></ul></a>

                    @endforeach

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>