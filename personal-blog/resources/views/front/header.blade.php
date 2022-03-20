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
         <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="#">Home</a>
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