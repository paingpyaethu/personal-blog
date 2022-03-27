<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title','Personal Blog')</title>

   <meta name="csrf-token" content="{{ csrf_token() }}">
   <!---------- BootStrap Min Css ---------->
   <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
   <!---------- FontAweSome Css ---------->
   <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
   <!---------- Style Css ---------->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   @yield('styles')
</head>
<body>

<!---------- NavBar - Header ------------>
@include('front.header')


<!---------- Banner Page ------------>
{{--@include('front.banner')--}}
@yield('banner')

<!---------- Projects Page ------------>
<div class="container">
   <div class="row my-5 projects">
      <div class="col-12 col-md-2">
         @include('front.left-sidebar')
      </div>

      <div class="col-12 col-md-6">
         @yield('content')
      </div>

      <div class="col-12 col-md-4">
         @include('front.right-sidebar')
      </div>
   </div>
</div>

<!---------- Footer Section ---------->
@include('front.footer')

<!---------- BootStrap Bundle JS ---------->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!---------- JQuery JS ---------->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!---------- Main JS ---------->
<script src="{{ asset('js/main.js') }}"></script>

@yield('script')
</body>
</html>