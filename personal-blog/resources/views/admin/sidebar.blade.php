<!---------- Sidebar ---------->
<div class="app-sidebar sidebar-shadow d-none d-lg-block">
   <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
         <ul class="vertical-nav-menu">
            <li class="menu-item mt-3">
               <a href="{{ route('admin.dashboard') }}" class="nav-menu-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                  <span>
                     <i class="fas fa-home me-1"></i>
                     Dashboard
                  </span>
               </a>
            </li>
            <li class="menu-item mt-3">
               <a href="{{ url('/') }}" class="nav-menu-link">
                  <span>
                     <i class="fas fa-blog me-1"></i>
                     Go To Blog
                  </span>
               </a>
            </li>
            <li class="menu-spacer"></li>

            <li class="menu-title">Menu</li>
            <li class="menu-item">
               <a href="{{ route('skills.index') }}"
                  class="nav-menu-link {{ request()->is('admin/skills*') ? 'active' : '' }}">
                  <span>
                     <i class="fas fa-book-journal-whills me-1"></i>
                     Skills
                  </span>
               </a>
            </li>

            <li class="menu-title">Setting</li>
            <li class="menu-item">
               <a href="{{ route('categories.index') }}"
                  class="nav-menu-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                  <span>
                     <i class="fas fa-layer-group me-1"></i>
                     Category Manager
                  </span>
               </a>
            </li>
            <li class="menu-item">
               <a href="{{ route('users.index') }}"
                  class="nav-menu-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                  <span>
                     <i class="fas fa-users me-1"></i>
                     User Manager
                  </span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<!---------- Sidebar ---------->