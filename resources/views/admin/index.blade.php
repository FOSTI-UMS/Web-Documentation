<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Event List | WEB EVENT FOSTI UMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon-->
  <link rel="icon" href="{{asset('log/favicon.png')}}" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('log/plugins/font-awesome/css/all.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('log/dist/css/adminlte.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('log/css/admin.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('log/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- CSS sweetalert -->
  <link rel='stylesheet' href='{{asset('log/plugins/sweetalert2/sweetalert2.min.css')}}'>
  <!-- Custom Css -->
{{--   <link href="{{asset('log/css/style.css')}}" rel="stylesheet"> --}}
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="ring">
              Loading
              <span class="spinner"></span>
            </div>
        </div>
    </div>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a class="nav-link" href="{{route('admin')}}" title="Homepage">Beranda</a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a class="nav-link" title="Fosti Docs" href="{{route('home')}}">Docs</a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a class="nav-link" title="Blog Fosti" href="http://fosti.ums.ac.id/blog">Blog</a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a class="nav-link" title="Source Code" href="http://github.com/fosti">Source Code</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://fosti.ums.ac.id" title="FOSTI UMS" class="brand-link elevation-4">
      <div class="brand-text font-weight-bold"><span>F</span><span style="color: red;">OS</span><span>TI UMS</span></div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('log/images/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin')}}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Materi</li>
          <li class="nav-item">
            <a href="/omah/daftar" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Daftar Materi
                <span class="badge badge-info right">{{ $materi->count() }}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/omah/create" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Tambah Materi
              </p>
            </a>
          </li>
          <li class="nav-header">USER</li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Admin</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">WEB Fosti Docs</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                WEB Fosti Docs digunakan untuk mengabadikan serta memberi informasi seputar materi FOSTI Universitas Muhammadiyah Surakarta baik dari fossclass maupun seminar...
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                24 Juli 2020
              </div>
              <!-- /.card-footer-->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">Latest Updates</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <span class="font-weight-bold">Proses pembuatan web Fosti Docs:</span><br>
              - Merubah dari statis menjadi dinamis<br>
              - Frontend admin mengambil dari web event dengan optimalisasi<br>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <span  class="font-weight-bold" style="font-size: large;">v1.0.0</span><br>
                24 Juli 2020
              </div>
              <!-- /.card-footer-->
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright © <script>document.write(new Date().getFullYear());</script>  |<a href="http://fosti.ums.ac.id"> FOSTI </a>| </strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('log/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('log/js/bootstrap.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('log/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('log/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('log/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('log/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- Sweetalert Js -->
</script>
<!-- Validation Plugin Js -->
<script src="{{asset('log/js/jquery.validate.js')}}"></script>
<!-- Sweetalert Js -->
<script src="{{asset('log/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('log/js/main.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
      setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);
    })
</script>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#tabel").DataTable({
    "responsive": true,
    "scrollX": true,
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    });
  });
</script>
<script type="text/javascript">
  function deleteConfirmation(id) {
    swal({
      title: 'Apakah Anda Yakin?',
      text: "Data akan dihapus secara permanen !",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#28a745',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then(function (result) {
        if (result.value) {
          window.location.href = '/omah/delete/'+ id;
        } else {
          // handle cancel
        }
    })
  }
</script>
</body>
</html>

