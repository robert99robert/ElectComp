<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>