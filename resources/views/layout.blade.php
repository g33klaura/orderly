<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome to Orderly</title>
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,400i,600|Dosis" rel="stylesheet"> 
  </head>
  <body>

    {{--  Needs empty div for React to render in  --}}
    <div class="container" id="root"></div>

    <!-- Script for React -->
    <script src="{{mix('js/app.js')}}"></script>
  </body>
</html>
