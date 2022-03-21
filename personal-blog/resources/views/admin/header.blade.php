<!---------- Header ---------->
<div class="app-header header-shadow">
   <div class="app-header__logo">
      <div class="logo-src">
         <img src="{{ asset('images/pblog-logo.png') }}" alt="">
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
               <img src="{{ asset('images/about-me/my-img.png') }}" class="shadow-sm me-2" alt="">
               {{ Auth::user()->name }}
            </button>
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
      </div>
   </div>
</div>
<!---------- Header ---------->