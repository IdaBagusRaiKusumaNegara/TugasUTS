
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
            @foreach($errors->get('mata_kuliah') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>
        <div class="form-group">
          <label>Jumlah SKS</label>
          <select class="form-control" id="sks" name="sks">
            <option value="">Pilih Jumlah SKS</option>
            <option value="1">Satu</option>
            <option value="2">Dua</option>
            <option value="3">Tiga</option>
          </select>
          @foreach($errors->get('sks') as $msg)
                <p class="text-danger">{{ $msg }}</p>
          @endforeach
        </div>
        <div class="form-group">
            <label >Prodi</label>
            <select class="form-control" id="id_prodi" name="id_prodi">
              <option value="">
                Pilih Prodi
              </option>
              @foreach ($dtPrd as $item)
                <option value="{{$item->id}}">{{$item->nama_prodi}}</option>
              @endforeach
            </select>
            @foreach($errors->get('id_prodi') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>
        <div class="form-group">
          <label>Semester</label>
          <select class="form-control" id="smtr" name="smtr">
            <option value="">Pilih Semester</option>
            <option value="1">Satu</option>
            <option value="2">Dua</option>
            <option value="3">Tiga</option>
            <option value="4">Empat</option>
            <option value="5">Lima</option>
            <option value="6">Enam</option>
            <option value="7">Tujuh</option>
            <option value="8">Delapan</option>
            <option value="9">Sembilan</option>
            <option value="10">Sepuluh</option>
            <option value="11">Sebelas</option>
            <option value="12">Dua Belas</option>
            <option value="13">Tiga Belas</option>
            <option value="14">Empat Belas</option>
          </select>
          @foreach($errors->get('smtr') as $msg)
                <p class="text-danger">{{ $msg }}</p>
          @endforeach
        </div>
        <div class="form-group">
            <label >Dosen</label>
            <select class="form-control" id="id_dosen" name="id_dosen">
              <option value="">
                Pilih Dosen
              </option>
              @foreach ($dtDsn as $item)
                <option value="{{$item->id}}">{{$item->nama_dsn}}</option>
              @endforeach
            </select>
            @foreach($errors->get('id_dosen') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
          </div>
          <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
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
