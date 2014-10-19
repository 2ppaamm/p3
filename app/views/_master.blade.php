<!DOCTYPE html>
<html lang="en">
  <head>
    @include('_header')
  </head>

  <body>

    <!-- begin:navbar -->
    @include('_navbar')
    <!-- end:navbar -->

    <!-- begin:header -->
    @yield('header')
    <!-- end:header -->

    <!-- begin:featured -->
    @yield('feaured')
    <!-- end:featured -->

    <!-- begin:content to be filled by individual pages-->
    @yield('content')
    <!-- end:content -->

    <!-- begin:portfolio -->
    @yield('portfolio')
    <!-- end:portfolio -->

    @include ('footer')
    @yield('page_js')
  </body>
</html>
