<!---------- Sidebar ---------->
<div class="app-sidebar sidebar-shadow">
   <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
         <ul class="vertical-nav-menu">
            <li class="menu-item mt-3">
               <a href="{{ url('/dashboard') }}" class="nav-menu-link {{ request()->is('dashboard') ? 'active' : '' }}">
                  <span>
                     <i class="fas fa-home"></i>
                     Dashboard
                  </span>
               </a>
            </li>
            <li class="menu-spacer"></li>

            <li class="menu-title">Setting</li>
            <li class="menu-item">
               <a href="{{ route('categories.index') }}"
                  class="nav-menu-link {{ request()->is('categories') ? 'active' : '' }}">
                  <span>
                     <i class="fas fa-layer-group"></i>
                     Category Manager
                  </span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<!---------- Sidebar ---------->