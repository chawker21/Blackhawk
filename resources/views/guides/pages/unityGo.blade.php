@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Basic Template</div>
                            <div id="test" class="panel-body">
                                <p>After Installing The Android SDK Enable Debugging on the Oculus App on your phone.</p>
                                <p>Open a command prompt in the platform-tools folder of the android-sdk</p>
<p>C:\Program Files\Android\Andriodsdk\platform-tools</p>
                                <p>Type</p>

                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

adb devices


                                </div>
                                <p>To show Oculus is attached</p>
                                <p></p>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                adb install path_to_apk
                                </div>
                                <a href="https://developer.android.com/studio/command-line/adb" class="btn btn-large btn-block btn-primary" target="_blank" type="button">Android command line guide</a>
<p></p>                                <a href="https://www.androidcentral.com/how-sideload-apps-oculus-go" class="btn btn-large btn-block btn-primary" target="_blank" type="button">Android sideload to oculus go guide</a>

                            </div>
                    </ul>
                    </li>
                </d

            </div>
        </div>
@endsection