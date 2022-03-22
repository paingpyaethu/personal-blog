<!---------- NavBar - Header ------------>
<nav class="navbar navbar-expand-lg navbar-dark site-nav">
   <div class="container">
      <a class="navbar-brand" href="#">
         <img src="{{ asset('images/pblog-logo.png') }}" alt="" style="width: 150px">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav me-auto">
            <li class="nav-item">
               <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('welcome.index') }}">Home</a>
            </li>
            <li class="nav-item blog-menu">
               <a class="blog-menu-toggle" href="javascript:void(0)" id="blogMenuToggle" role="button">
                  Blog Menu
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="#">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="#">Contact</a>
            </li>
         </ul>
      @if(\Illuminate\Support\Facades\Auth::check())
         @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
               <div class="dropdown user-info">
                  <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="{{ asset('images/about-me/my-img.png') }}" class="user-img shadow-sm me-2" alt="">
                     {{ strtoupper(Auth::user()->name) }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <!-- Authentication -->
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Go To Dashboard</a></li>
                        <li>
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                         this.closest('form').submit();">
                              Logout
                           </a>
                        </li>
                     </form>
                  </div>
               </div>
            @else
               <div class="dropdown user-info">
                  <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="{{ asset('images/about-me/my-img.png') }}" class="user-img shadow-sm me-2" alt="">
                     {{ strtoupper(Auth::user()->name) }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <!-- Authentication -->
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                         this.closest('form').submit();">
                           Logout
                        </a>
                     </form>
                  </div>
               </div>
         @endif
      @else
            <div class="d-flex align-items-center">
               <a href="{{ route('login') }}">
                  <button class="btn btn-success me-2">Login</button>
               </a>
               <a href="{{ route('register') }}">
                  <button class="btn btn-outline-warning">Register</button>
               </a>
            </div>
      @endif

      </div>
   </div>
</nav>

<ul class="blog-menu-inner">
   <div class="blog-item">
      <div class="blog-content">
         <div class="post-image-warp">
            <a href="" class="post-image-link">
               <img src="{{ asset('images/projects/img/img-1.png') }}" class="post-thumbnail" alt="">
            </a>
            <span class="post-tag">Web App</span>
         </div>
         <h2 class="post-title">
            <a href="">Responsive Profile Website</a>
         </h2>
         <div class="post-meta">
            <i class="fas fa-clock"></i>
            March 18, 2020
         </div>
      </div>
   </div>
   <div class="blog-item">
      <div class="blog-content">
         <div class="post-image-warp">
            <a href="" class="post-image-link">
               <img src="{{ asset('images/projects/img/img-1.png') }}" class="post-thumbnail img-fluid" alt="">
            </a>
            <span class="post-tag">Web App</span>
         </div>
         <h2 class="post-title">
            <a href="">Responsive Profile Website</a>
         </h2>
         <div class="post-meta">
            <span class="post-date">
               <i class="fas fa-clock"></i>
               March 18, 2020
            </span>
         </div>
      </div>
   </div>
   <div class="blog-item">
      <div class="blog-content">
         <div class="post-image-warp">
            <a href="" class="post-image-link">
               <img src="{{ asset('images/projects/img/img-1.png') }}" class="post-thumbnail img-fluid" alt="">
            </a>
            <span class="post-tag">Web App</span>
         </div>
         <h2 class="post-title">
            <a href="">Responsive Profile Website</a>
         </h2>
         <div class="post-meta">
            <span class="post-date">
               <i class="fas fa-clock"></i>
               March 18, 2020
            </span>
         </div>
      </div>
   </div>
   <div class="blog-item">
      <div class="blog-content">
         <div class="post-image-warp">
            <a href="" class="post-image-link">
               <img src="{{ asset('images/projects/img/img-1.png') }}" class="post-thumbnail img-fluid" alt="">
            </a>
            <span class="post-tag">Web App</span>
         </div>
         <h2 class="post-title">
            <a href="">Responsive Profile Website</a>
         </h2>
         <div class="post-meta">
            <span class="post-date">
               <i class="fas fa-clock"></i>
               March 18, 2020
            </span>
         </div>
      </div>
   </div>
</ul>