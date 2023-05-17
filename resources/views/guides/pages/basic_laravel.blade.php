

@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Setting up a basic Laravel Project</h2></div>
                    <div id="test" class="panel-body">
                        <hr>
                    <p>First is to Install a laravel project.  Open up a terminal and goto the directory the project will be installed in.</p>
                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/basic_laravel/term1.jpg") }}" alt="Card image cap">

                        <p>Type the "laravel new <i style="color:orange">project</i>" command Changing <i style="color:orange">project</i> to whatever you want the APP to be called.</p>

                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">laravel new <i style="color:orange">project</i></div><br>

                        <p>You will find a directory with the basic laravel App files</p>

                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/basic_laravel/laravel_proj.jpg") }}" alt="Card image cap">

                        <p>The first thing I do is copy the .env file or contents from another project, this is where you keep information about APIs and Configs.</p>

                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/basic_laravel/env.jpg") }}" alt="Card image cap">

                        <p>You will need a vendor folder next, but first add any packages that you know you will be needing in the Composer.json file.  These will be built into the vendor folder.</p>
                        <p>Pay special attention to the laravel/framework version.  5.5.* is good for Raspberry Pi servers because they as of right now can only use PHP7.0.  5.6* needs php7.1</p>
                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/basic_laravel/comp.jpg") }}" alt="Card image cap">

                        <p>after the Composer.json file is ready you are ready to create the Vendor folder type the composer install command in the terminal window</p>

                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">composer install</div><br>

                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/basic_laravel/comp2.jpg") }}" alt="Card image cap">

                        <p>after the Vendor folder is created a key can be generated for the App.  This key is automatically stored in the .env file after using the key:generate command.</p>

                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">php artisan key:generate</div><br>

                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/basic_laravel/comp3.jpg") }}" alt="Card image cap">

                        <p>now you should be able to serve the page to a server and display it in a browser</p>

                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">php artisan serve</div><br>

                        <p>This will serve the page at localhost:8000 in a browser window</p>

                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/basic_laravel/serve.jpg") }}" alt="Card image cap">

                        <hr>
                        <a href="laravel_template" class="btn btn-large btn-block btn-primary" target="_blank" type="button">continue to configuring my basic template for a project</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
@endsection