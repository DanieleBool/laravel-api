<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bool</title>
    <link rel="stylesheet" href="{{asset("css/front.css")}}">
</head>
<body>
    {{-- QUESTO ID=APP CI PERMETTE DI VEDERE LA WELCOME PAGE --}}
    <div id="app"></div>
    {{-- @auth
    <script>
        window.autenticato = true;
    </script>
    @endauth
    @guest
    <script>
        window.autenticato = false;
    </script> 
    @endguest --}}
    <script src="{{asset("js/front.js")}}"></script>
</body>
</html>