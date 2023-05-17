@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">

        <div class="row">
            <div class="col-md-12 " style="font-size:18px;">

                <div class="panel panel-default">

                    <div class="panel-heading"><h2>Create Migration and setup Form to save to table.</h2></div>
                    <hr>
                    <div id="test" class="panel-body col-md-10">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-primary border-dark"><p>When making a Database in Laravel, Often the first thing to do is to connect the table to the App using a Model.
                                    We create a model using the make model command, but in this example we also want a migration, This way we can
                                    easily populate the Database Table with the table columns.  By adding --migration to the end of this comman we
                                    can do just that.  Also you can add --controller for a Controller with the name of the model for easy recognition,
                                    likewise --factory will create a Model Factory where you can set it up to populate the database with
                                    preconfigured data, mostly for testing purposes.  So we begin with php artisan then make, model and your model name,
                                    then --migration and in this case --controller.<p></li><hr>

                        <div class=" alert alert-secondary border border-dark" style="font-weight:bold">php artisan make:model <i style="color:orange">Modelname</i> --migration --controller</div>
                            <li class="list-group-item list-group-item-primary border-dark"><p>This creates a Model with your Modelname, My practice is to use uppercase first letter and make it singular, the migration table will be lowercase and plural automatically.<p></li><hr>

                            <div class=" alert-warning" style="text-align:center;"><img class="card-img-height" src="{{asset("/guide_resources/assets/img/migration/term1.jpg") }}" alt="Card image cap">
                         <img class="card-img-height" src="{{asset("/guide_resources/assets/img/migration/model.jpg") }}" alt="Card image cap"></div><hr>
                        <li class="list-group-item list-group-item-primary border-dark"><p>Next you will want to create the columns for the table in the migration.<p></li><hr>

                       <div class="php-info alert alert-light border border-dark" style="font-weight:bold;"><?php
                            highlight_file('migration_table.php');
                                ?></div>
                        <li class="list-group-item list-group-item-primary border-dark"><p>it is also a good idea to set up your model to reflect the columns as fillable as well.<p></li><hr>
                       <div class="php-info alert alert-light border border-dark" style="font-weight:bold;"><?php
                            highlight_file('GuideModel.php');
                                ?></div>
                        <li class="list-group-item list-group-item-primary border-dark"><p>before migrating the table to the database you will want to do a few steps.<p></li><hr>

                            <li class="list-group-item list-group-item-primary border-dark"><p>Install the doctrine/dbal package in composer.json and run composer update<p></li><hr>
                            <div class=" alert-warning" style="text-align:center;"><img class="card-img-height" src="{{asset("/guide_resources/assets/img/migration/dbal.jpg") }}" alt="Card image cap"></div>
                            <div class="alert alert-secondary border border-dark" style="font-weight:bold">composer update</div>
                            <li class="list-group-item list-group-item-primary border-dark"><p>Next go into the AppServiceProvider.php file in the Providers menu and add the following<p></li><hr>
                            <div class="php-info alert alert-light border border-dark" style="font-weight:bold;"><?php
                                highlight_file('serviceprovider.php');
                                ?></div>
                            <li class="list-group-item list-group-item-primary border-dark"><p>this will prevent an error in some cases preventing the migration because of too long of a default string.<p></li><hr>

                        <li class="list-group-item list-group-item-primary border-dark"><p>next make sure you have a table in your database with the correct name<p></li><hr>

                        <li class="list-group-item list-group-item-primary border-dark"><p>Then run the migration with the command php artisan migrate<p></li><hr>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">php artisan migrate</div>
                            <div class=" alert-warning" style="text-align:center;"><img class="card-img-height" src="{{asset("/guide_resources/assets/img/migration/migration2.jpg") }}" alt="Card image cap"></div>
                            <div class=" alert-warning" style="text-align:center;"> <img class="card-img-height" src="{{asset("/guide_resources/assets/img/migration/migration3.jpg") }}" alt="Card image cap"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection