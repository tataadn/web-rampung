<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Rampung</title>
      <!-- MDB icon -->
      <link rel="icon" href="img/rampung.logo.png" type="image/x-icon" />
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
      <!-- Google Fonts Roboto -->
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      />
      <!-- MDB -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
      <link rel="stylesheet" href="{{asset('css/style.css')}}" />
      <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />
      <link rel="stylesheet" href="{{asset('css/swa2.css')}}" />
      <link rel="stylesheet" href="{{asset('css/toastr.css')}}" />
      <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    </head>
  <body>
    <!-- Start your project here-->
      <!-- Navbar -->
      <!-- Navbar -->

      @yield('content')

      <!-- Footer -->
       @include('theme.footer')
       <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/auth.js')}}"></script>
       <script src="{{asset('semicolon/js/plugins.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/confirm.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/swa2.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/toastr.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
       <!-- Custom scripts -->
       <script type="text/javascript"></script>
       @yield('custom_js')
  </body>
</html>
