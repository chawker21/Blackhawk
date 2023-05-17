@include('_header')

<body>
        <main>
            <div>
                @yield('content')
            </div>
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
            @yield('scripts')
</body>


