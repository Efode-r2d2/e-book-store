<!DOCTYPE html>
<html lang="en">
    <!-- head starts here -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>eBookStore</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('fonts')}}">
    </head>
    <!-- head end here -->
    <!-- body starts here -->
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            @include('layouts.navbar')
            @include('layouts.sidebar')
            @yield('content')
            @include('layouts.footer')
        </div>
        <!-- including scripts -->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
    <!-- body ends here-->
</html>
