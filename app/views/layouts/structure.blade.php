<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
        @if (isset($title)) {{ $title  }} | @endif
        The Doctor
        </title>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>

    <body>
        <header class="container">
            <h1 class="site"><a href="/">The Island of Doctor Who</a></h1>
        </header>

        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="/assets/js/script.min.js"></script>
</html>