<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Sail Canada Sailboat Number Registration</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- Viewport Meta Tag: This enables use of media queries for cross-device layouts -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="container">
      <h1>Welcome!</h1>
      @yield('header')
      @yield('content')
    </div>
  </body>
</html>