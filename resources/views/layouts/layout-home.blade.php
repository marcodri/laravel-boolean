<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="{{ asset('css-img/css/style.css') }}">
  </head>
  <body>
    @include('common.header')
    @yield('homeMain')
    @yield('corsoMain')
    @yield('candidatiMain')
    @yield('campMain')
    @yield('dopoCorsoMain')
    @yield('cdBoolean')
  </body>
</html>
