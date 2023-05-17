<div class="container">
    <form action="{{route('/EQemu/NPC/NPC_result')}}" method="post" enctype="multipart/form-data">
        <div class="form-row align-items-center">
            <div class="col-auto">
                @csrf
                <input type="text" id="NPCsearch" name="name" placeholder="NPC name" class="form-control mb-2">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>
</div>
