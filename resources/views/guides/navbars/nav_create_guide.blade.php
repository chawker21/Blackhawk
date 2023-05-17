<div class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 15px;">
    <a class="navbar-brand mr-5" href="{{url('/')}}">Chawker21.blue</a>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createGuideModal">
        Create New Guide
    </button>
    <!-- Modal -->
    @include('guides.modals.CreateNewGuideModal')
</div>


