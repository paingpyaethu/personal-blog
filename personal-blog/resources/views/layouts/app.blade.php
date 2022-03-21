<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Blog</title>

    <!---------- BootStrap Min Css ---------->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!---------- FontAweSome Css ---------->
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <!---------- Style Css ---------->
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
</head>
<body>

<div class="app-container app-theme-white fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src">
                <img src="vendor/images/pblog-logo1.png" alt="">
            </div>
        </div>
        <div class="app-header__content">
            <div class="app-header-left">
                <form class="search-wrapper">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
            <div class="app-header-right">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="vendor/images/about-me/my-img.png" class="shadow-sm me-2" alt="">
                        Paing Pyae Thu
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li>
                            <a href="" class="nav-menu-link active">
                        <span>
                           <i class="fas fa-home"></i>
                           Dashboard
                        </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="app-main-outer">
            <div class="app-main-inner">

            </div>
        </div>
    </div>
</div>






<!---------- BootStrap Bundle JS ---------->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!---------- JQuery JS ---------->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!---------- Main JS ---------->
<script src="{{ asset('js/admin.main.js') }}"></script>
</body>
</html>