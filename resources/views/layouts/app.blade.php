<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Orderly</title>
  </head>
  <body>

    {{--  Needs empty div for React to render in  --}}
    <div class="container" id="root"></div>

    <!-- Script for React -->
    <script src="{{mix('js/app.js')}}"></script>
  </body>
</html>
