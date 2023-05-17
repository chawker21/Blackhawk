<style>

    html {
        background-color:black;
    }
</style>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <form class="form-inline">
            <button class="btn btn-outline-success" type="button">Main button</button>

        </form>
    </div>

</nav>