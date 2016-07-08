<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('includes.importcss')
</head>
<body>

<header>
    @include('includes.header')
</header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('includes.footer')

</body>
    @include('includes.importjs')
</html>