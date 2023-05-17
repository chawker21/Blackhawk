
    @extends('presidents.layouts.app')


    @section('title', '| Photo Index')

    @section('content')
        CHART
        <div id="timeline" style="height: 880px; width:1600px;"></div>
<div class="d-flex justify-content-center">{!! $presidents->links() !!}</div>
@endsection
