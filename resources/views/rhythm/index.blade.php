@extends('rhythm/layouts/app')



<!-- Page Loader -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->

<!-- Page Wrap -->
<div class="page" id="top">

    @include('rhythm/partials/index/_home')


    @include('rhythm/navbars/rhythmnav')


    @include('rhythm/partials/index/_about')
<!-- Divider -->
    <hr class="mt-0 mb-0 "/>
        <!-- End Divider -->


    @include('rhythm/partials/index/_services')


    @include('rhythm.partials/index._callaction1')



    @include('rhythm/partials/index/_portfolio')

    @include('rhythm.partials/index._callaction2')

    @include('rhythm/partials/index/_features')

    @include('rhythm/partials/index/_testimonials')


    @include('rhythm/partials/index/_blog')


    @include('rhythm/partials/index/_newsletter')


    @include('rhythm/partials/index/_contact')


    @include('rhythm/partials/index/_map')


    @include('rhythm/partials/index/_footer')


</div>
<!-- End Page Wrap -->
        
        

        
