
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
            <h1>DATA KRS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Input KRS</li>
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
        <h3 class="card-title">Input Data KRS</h3>
      </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
      <form action="{{ route('simpankrsmahasiswa') }}" method="post">
      {{ csrf_field() }}
          <div class="form-group">
            <label >Mata Kuliah</label>
            <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Masukan Nama Mata Kuliah">
          </div>
          <div class="form-group">
            <label >Jumlah SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" placeholder="Masukan Jumlah SKS">
          </div>
          <div class="form-group">
            <label >Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukan Nama Prodi">
          </div>
          <div class="form-group">
            <label >Semester</label>
            <input type="number" class="form-control" id="smtr" name="smtr" placeholder="Masukan Semester">
          </div>
          <div class="form-group">
            <label >Dosen</label>
            <input type="text" class="form-control" id="dosen" name="dosen" placeholder="Masukan Nama Dosen">
          </div>
          <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
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
