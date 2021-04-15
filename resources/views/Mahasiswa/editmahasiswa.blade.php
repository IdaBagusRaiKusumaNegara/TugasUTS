
<!DOCTYPE html>
<html>
@include('Template.head')
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('Template.navbar')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
      <img src="{{asset('/assets/dist/img/siwo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIAK</span>
    </a>

    @include('Template.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SISTEM INFORMASI AKADEMIK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">iN</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Main content -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mahasiswa</h3>
      </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
      <form action="{{ url('updatemahasiswa', $mhs->id) }}" method="post">
      {{ csrf_field() }}
          <div class="form-group">
            <label >Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="{{ $mhs->nama }}">
          </div>
          <div class="form-group">
            <label >Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenkel" name="jenkel" placeholder="Masukan Jenis Kelamin(L/P)" value="{{ $mhs->jenkel }}">
          </div>
          <div class="form-group">
            <label >Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukan Tempat Lahir" value="{{ $mhs->tempat }}">
          </div>
          <div class="form-group">
            <label >Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="{{ $mhs->tgllahir }}">
          </div>
          <div class="form-group">
            <label >Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan Jurusan" value="{{ $mhs->jurusan }}">
          </div>
          <div class="form-group">
            <label >Angkatan</label>
            <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukan Angkatan" value="{{ $mhs->angkatan }}">
          </div>
          <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    </div>
    <!-- /.content -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('Template.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('Template.script')
</body>
</html>
