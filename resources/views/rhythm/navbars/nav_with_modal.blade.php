<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" style="color:cornflowerblue;" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

        <!-- Modal -->
        @include('Template.modals.TemplateModal')
    </div>
</nav>