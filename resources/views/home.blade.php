<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Iwan_Fachryan</title>
@vite('resources/css/app.css')
<link href="{{asset('assets/style.css')}}" rel="stylesheet">
</head>
<body>
  
  @include('partials.sidebar')

  @yield('konten')

  <script>
    function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    }
    
    function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    }
  </script>
</body>
</html>
