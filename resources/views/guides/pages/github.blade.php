@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">adding remote files to existing repository</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    <p>
                                        Steps -
                                    </p>
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git init<br>
                                        git remote add origin (remote_url)<br>
                                        git fetch --all --prune<br>
                                        git checkout master<br>
                                        git add -A<br>
                                        git commit -m "Adding my files..."<br>
                                    </div>
                                    <p>
                                        You don't need to clone the repository, you need to add remote and then add the
                                        files to the repository.<br>
                                        details:<br>
                                        You already have a remote repository and you want to add files to this
                                        repository.<br>

                                        1. First you have to "tell" git that the current directory is a git
                                        repository
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git init
                                    </div>
                                    2. Then you need to tell git what is the url of the remote repository
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git remote add origin master
                                    </div>
                                    3. Now you will need to grab the content of the remote repository (all the
                                    content - branches, tags etc)
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git fetch --all --prune
                                    </div>
                                    4. Check out the desired branch (master in this example)<br>
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git checkout master
                                    </div>
                                    5. Add the new files to the current master
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git add -A
                                    </div>
                                    6. Commit your changes
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git commit -m "write message for commit..."
                                    </div>
                                    7. Upload your changes back to the remote repository
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        git push origin master
                                    </div>
                                    </p>
                                    <hr>
                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    </div>


                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
@endsection