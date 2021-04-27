
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
              <li class="breadcrumb-item active">Input Dosen</li>
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
        <h3 class="card-title">Input Data Dosen</h3>
      </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
      <form action="{{ route('simpandosen') }}" method="post">
      {{ csrf_field() }}
          <div class="form-group">
            <label >Nama Dosen</label>
            <input type="text" class="form-control" id="nama_dsn" name="nama_dsn" placeholder="Masukan Nama">
            @foreach($errors->get('nama_dsn') as $msg)
              <p class="text-danger">{{ $msg }}</p>
            @endforeach
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio"  id="jkl_dsn" name="jkl_dsn" value="L">
                <label class="form-check-label">Laki-Laki</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  id="jkl_dsn" name="jkl_dsn" value="P">
                <label class="form-check-label">Perempuan</label>
              </div>
              @foreach($errors->get('jkl_dsn') as $msg)
              <p class="text-danger">{{ $msg }}</p>
              @endforeach
          </div>
          <div class="form-group">
            <label >Tempat</label>
            <input type="text" class="form-control" id="tmpt_dsn" name="tmpt_dsn" placeholder="Masukan Tempat Lahir">
            @foreach($errors->get('tmpt_dsn') as $msg)
              <p class="text-danger">{{ $msg }}</p>
            @endforeach
          </div>
          <div class="form-group">
            <label >Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_dsn" name="tgl_dsn">
            @foreach($errors->get('tgl_dsn') as $msg)
              <p class="text-danger">{{ $msg }}</p>
            @endforeach
          </div>
          <div class="form-group">
            <label>Status Pegawai</label>
              <div class="form-check">
                <input class="form-check-input" type="radio"  id="status_peg" name="status_peg" value="Aktif">
                <label class="form-check-label">Aktif</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  id="status_peg" name="status_peg" value="Tidak Aktif">
                <label class="form-check-label">Tidak Aktif</label>
              </div>
              @foreach($errors->get('status_peg') as $msg)
              <p class="text-danger">{{ $msg }}</p>
              @endforeach
          </div>
          <div class="form-group">
            <label >Jurusan</label>
            <select class="form-control" id="id_jurusan" name="id_jurusan" placeholder="Masukan Jurusan">
              <option value="">
                Pilih Jurusan
              </option>
              @foreach ($dtJur as $item)
                <option value="{{$item->id}}">{{$item->nama_jur}}</option>
              @endforeach
            </select>
            @foreach($errors->get('id_jurusan') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
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
