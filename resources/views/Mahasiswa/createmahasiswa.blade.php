
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
              <li class="breadcrumb-item active">Input Mahasiswa</li>
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
        <h3 class="card-title">Input Data Mahasiswa</h3>
      </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
      <form action="{{ route('simpanmahasiswa') }}" method="post">
      {{ csrf_field() }}
          <div class="form-group">
            <label >Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
            @foreach($errors->get('nama') as $msg)
              <p class="text-danger">{{ $msg }}</p>
            @endforeach
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio"  id="jenkel" name="jenkel" value="L">
                <label class="form-check-label">Laki-Laki</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  id="jenkel" name="jenkel" value="P">
                <label class="form-check-label">Perempuan</label>
              </div>
              @foreach($errors->get('jenkel') as $msg)
              <p class="text-danger">{{ $msg }}</p>
              @endforeach
          </div>
          <div class="form-group">
            <label >Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukan Tempat Lahir">
            @foreach($errors->get('tempat') as $msg)
              <p class="text-danger">{{ $msg }}</p>
            @endforeach
          </div>
          <div class="form-group">
            <label >Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgllahir" name="tgllahir">
            @foreach($errors->get('tgllahir') as $msg)
              <p class="text-danger">{{ $msg }}</p>
            @endforeach
          </div>
          <div class="form-group">
            <label >Jurusan</label>
            <select class="form-control" id="id_jurusan" name="id_jurusan">
              <option value>
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
          <div class="form-group">
            <label >Angkatan</label>
            <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukan Angkatan">
            @foreach($errors->get('angkatan') as $msg)
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
