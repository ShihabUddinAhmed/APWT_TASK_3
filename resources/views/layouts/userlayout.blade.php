<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <title>
        @yield('title')
    </title>
    <body>
        <div class="navbar navbar-brand" style="background-color: black">
            @include('includes.usernavbar')
        </div>
        <div class="container">
            @yield('usercontent')
        </div>
    </body>
</html>