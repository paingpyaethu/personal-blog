<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title','Dashboard')</title>

   <!---------- BootStrap Min Css ---------->
   <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
   <!---------- FontAweSome Css ---------->
   <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
   <!---------- Style Css ---------->
   <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">

   @yield('admin_styles')
</head>
<body>

<div class="app-container app-theme-white fixed-header fixed-sidebar">

   <!---------- Header ---------->
   @include('admin.header')
   <!---------- Header ---------->

   <div class="app-main">
      <!---------- Sidebar ---------->
      @include('admin.sidebar')
      <!---------- Sidebar ---------->

      <div class="app-main__outer">
         <div class="app-main__inner">
            @yield('contentAdmin')
         </div>
      </div>
   </div>
</div>





<!---------- JQuery JS ---------->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!---------- BootStrap Bundle JS ---------->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!---------- Main JS ---------->
<script src="{{ asset('js/admin.main.js') }}"></script>


@yield('admin_script')
</body>
</html>