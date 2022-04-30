<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <h1>Logeado</h1>
    @else
    <h1>No logeado</h1>
    @endauth
    <pre>{{Auth::user()}}</pre>
    <input type="text" name="hola" id="ajaxtest">
    <button id="ajax">
        hola
    </button>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="js/ajaxtest.js"></script>
</body>
</html>