<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .active{
        color: darkorange;
        font-weight: bold;
    }
    body{
        background-image: url(https://static.vecteezy.com/system/resources/previews/014/072/899/non_2x/transmission-tower-or-power-line-electricity-pylons-line-drawing-illustration-vector.jpg);
        font-family: Georgia, serif;
    }
    footer{
        background-color: #cccccc;
        border-left:1px solid;
        border-right:1px solid;
        border-bottom:1px solid;
        margin: auto;
        width: 95%;
        height: 100px;
        }
    nav{
        background-color:#cccccc;
    }
</style>
<body>
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>