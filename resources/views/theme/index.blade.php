<!DOCTYPE html>
<html lang="en">
    @include('theme.head')
  <body>
    <!-- Start your project here-->
      <!-- Navbar -->
       @include('theme.header')
      <!-- Navbar -->

      @yield('content')

      <!-- Footer -->
       @include('theme.footer')
       @include('theme.js')
       @yield('custom_js')
  </body>
</html>
