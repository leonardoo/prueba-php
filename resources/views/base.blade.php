<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    @include('menu')
    <section>
        @yield('content')
    </section>
</div>
</body>
</html>