<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <link rel="stylesheet" href="{{ elixir("css/app.css") }}">

        @yield('header')

    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
