
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Route::currentRouteNamed('beranda') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard </p>
            </a>
          </li> 
          <!-- Layanan -->
          <li class="nav-header">Layanan</li>
          @if (auth()->user()->level=="super user")
          <li class="nav-item">
                <a href="{{route('data-ecp')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Evaluate ECP</p>
                </a>
              </li>
              @endif
          @if (auth()->user()->level=="user spv")
          <li class="nav-item">
                <a href="{{route('data-ecp')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>
              @endif
          @if (auth()->user()->level=="user spv")
          <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Evaluate ECP</p>
                </a>
              </li>
              @endif
          @if (auth()->user()->level=="admin engineer")
          <li class="nav-item">
                <a href="{{route('data-ecp')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>
              @endif
          @if (auth()->user()->level=="admin engineer")
          <li class="nav-item">
                <a href="{{route('data-cmt')}}" class="nav-link {{ Route::currentRouteNamed('data-cmt') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Notulen ECP</p>
                </a>
              </li>
              @endif
          
          @if (auth()->user()->level=="user staff")
          <li class="nav-item">
                <a href="{{route('create-ecp')}}" class="nav-link {{ Route::currentRouteNamed('create-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Create ECP</p>
                </a>
              </li>
              @endif
          @if (auth()->user()->level=="user staff")
          <li class="nav-item">
                <a href="{{route('create-upload')}}" class="nav-link {{ Route::currentRouteNamed('create-upload') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Upload File Pendukung</p>
                </a>
              </li>
              @endif


          @if (auth()->user()->level=="user manager")
          <li class="nav-item">
                <a href="{{route('managerpersetujuan-ecp')}}" class="nav-link {{ Route::currentRouteNamed('managerpersetujuan-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Persetujuan ECP</p>
                </a>
              </li>
              @endif

          <!-- Pengaturan -->
            @if (auth()->user()->level=="super user")
          <li class="nav-header">Pengaturan</li>
          <li class="nav-item">
                <a href="{{route('data-pegawai')}}" class="nav-link {{ Route::currentRouteNamed('data-pegawai') ? 'active' : '' }}">
                  <i class="far fa-user"></i>
                  <p>Data User</p>
                </a>
              </li>
              @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->