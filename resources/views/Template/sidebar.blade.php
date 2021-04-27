<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/assets/dist/img/rai.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ida Bagus Rai Kusuma N.</a>
        </div>
    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('beranda') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('datamahasiswa') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Mahasiswa
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('datadosen') }}" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Data Dosen
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('krsmahasiswa') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data KRS
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('datajurusan') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Jurusan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('dataprodi') }}" class="nav-link">
              <i class="nav-icon fas fa-scroll"></i>
              <p>
                Data Prodi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                LOG OUT
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->