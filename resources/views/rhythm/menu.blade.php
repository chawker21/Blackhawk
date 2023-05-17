@extends('rhythm/layouts/app')

        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
           @include('rhythm/partials/menu/_home')
           @include('rhythm/partials/menu/_navigation')
           @include('rhythm/partials/menu/_about')
           @include('rhythm/partials/menu/_gallery')
           @include('rhythm/partials/menu/_menu')
           @include('rhythm/partials/menu/_callaction1')
           @include('rhythm/partials/menu/_reservation')
           @include('rhythm/partials/menu/_map')
           @include('rhythm/partials/menu/_footer')

        </div>
        <!-- End Page Wrap -->
        
        


