<h5 class="card-header">

    <form action="{{route('/EQemu/zone/zone_result')}}" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-3">
                <div class="form-group">
                    @csrf
                    <label for="zonesearch">Enter Zone name</label>
                    <input type="text" id="zonesearch" name="name" placeholder="Zone name" class="form-control">

                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>

    </form>
</h5>
<hr>