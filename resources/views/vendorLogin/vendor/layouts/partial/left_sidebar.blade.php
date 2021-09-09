  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('vendor.dashboard') }}" class="brand-link">
     {{-- <img src="{{ Storage::url(setting('site_logo')) }}" width="150px" height="35px" alt="Sohan IT Logo"> --}}
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('vendor.dashboard') }}" class="nav-link {{ Route::is('vendor.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('vendor.product.index') }}" class="nav-link {{ Route::is('vendor.product.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Product
              </p>
            </a>
          </li>
          
          {{-- <li class="nav-item">
            <a href="{{ route('admin.topbar.index') }}" class="nav-link {{ Route::is('admin.topbar.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Topbar
              </p>
            </a>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="{{ route('admin.accessleft.index') }}" class="nav-link {{ Route::is('admin.accessleft.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Accessories
              </p>
            </a>
          </li> --}}

          {{-- <li class="nav-item">
            <a href="{{ route('admin.setting') }}" class="nav-link {{ Route::is('admin.setting') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Setting
              </p>
            </a>
          </li> --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>