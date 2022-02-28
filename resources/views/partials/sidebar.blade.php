  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.arta.gov.ph" class="brand-link h-13">
      <img src="{{ asset('images/arta.png') }}" alt="ARTA Logo" class="brand-image img-circle elevation-3" style="opacity:1">
      <span class="brand-text font-weight-light ml-1"> EDTS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">

          @can('sidebar-view')
          
            <li class="nav-item">
              <a href="{{ url('dashboard')}}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                  <p> Create New
                    <i class="right fas fa-caret-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('docs/e/create')}}" class="nav-link {{ request()->is('docs/e/create') ? 'active' : '' }}">
                    <i class="fas fa-caret-right nav-icon"></i>
                    <p> External</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{{ url('docs/i/create')}}" class="nav-link {{ request()->is('docs/i/create') ? 'active' : '' }}">
                    <i class="fas fa-caret-right nav-icon"></i>
                    <p> Internal</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p> My Files
                  <i class="right fas fa-caret-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('files/external') }}" class="nav-link {{ request()->is('files/external') ? 'active' : '' }}">
                    <i class="fas fa-caret-right nav-icon"></i>
                      <p> External</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('files/internal') }}" class="nav-link {{ request()->is('files/internal') ? 'active' : '' }}">
                    <i class="fas fa-caret-right nav-icon"></i>
                      <p> Internal</p>
                  </a>
                </li>
              </ul>
            </li>
          @endcan

          @hasanyrole('SuperAdmin|Admin')
            <li class="nav-header">ADMIN MANAGEMENT</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p> Settings
                    <i class="right fas fa-caret-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p> Manage Accounts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p> Manage Roles</p>
                    </a>
                  </li>
                </ul>
              </li>
          @endhasanyrole

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>