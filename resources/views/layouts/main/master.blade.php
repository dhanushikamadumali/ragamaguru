<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>RAGAMA GURU ADMIN SIDE</title>

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @include('layouts.main.css')
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
    {{-- navbar --}}
      @include('layouts.main.header')
      {{-- sidebar --}}
      @include('layouts.main.sidebar')
      {{-- main content --}}
        @yield('content')
    </div> <!-- .wrapper -->
    {{-- jquery --}}
    @include('layouts.main.script')
    @yield('scripts')
    <x-notify::notify />
  </body>
</html>
