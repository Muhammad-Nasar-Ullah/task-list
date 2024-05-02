<!DOCTYPE>
<html>
<head>
    @yield('style')
</head>

<body>
    <h1>
        @yield('title')
    </h1>

    <dvi>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </dvi>


</body>
</html>
