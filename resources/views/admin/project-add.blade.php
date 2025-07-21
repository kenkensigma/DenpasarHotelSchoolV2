<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Add</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
              <li class="nav-item">
                <a href="projects" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News & Events</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="gallery-list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>
              <li class="nav-item">
              <a href="team-list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Team
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">News & Event</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projedt Add</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form News & Event</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" class="custom-validation">
                    @csrf                         
                
                    <div class="row">
                        <div class="form-group mb-3 col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" name="category" required>
                                <option value="">None</option>
                                <option value="Beasiswa">Beasiswa</option> <!-- Ubah jadi string -->
                            </select>   
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
                        </div>
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>
                
                    <div class="row">
                        <div class="form-group mb-3 col-md-6">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required>
                              {{ old('content') ? strip_tags(old('content')) : '' }}
                          </textarea>
                        </div>
                        <div class="form-group mb-3 col-md-6">  
                            <label for="photo" class="form-label">Upload File</label>
                            <input type="file" id="photo" name="photo" class="form-control dropify" data-max-file-size="2M" required 
                                data-allowed-file-extensions="jpg png jpeg"/>
                            <small>note: Ukuran gambar maksimal 2MB</small>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="form-group mb-3 col-md-6">
                            <label for="caption_image" class="form-label">Caption Image</label>
                            <input type="text" name="caption_image" id="caption_image" class="form-control" value="{{ old('caption_image') }}">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" name="tags" id="tags" class="form-control" value="{{ old('tags') }}">
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="form-group mb-3 col-md-6">
                            <label for="keyword" class="form-label">Keywords</label>
                            <input type="text" name="keyword" id="keyword" class="form-control" value="{{ old('keyword') }}">
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="hit" class="form-label">Hit</label>
                            <input type="number" name="hit" id="hit" class="form-control" value="{{ old('hit') }}">
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" required>
                                <option value="0">Hide</option>
                                <option value="1">Show</option> <!-- Ubah jadi angka sesuai Tinyint -->
                            </select>
                        </div>
                    </div>
                
                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
                
                </div>
            </div>
        </div>
    </section>
</div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<!-- jQuery (Wajib sebelum Dropify) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Dropify (Pastikan link-nya benar) -->
<script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

<!-- Inisialisasi Dropify -->
<script>
    $(document).ready(function () {
        console.log(typeof $.fn.dropify); // Cek apakah Dropify termuat
        $('.dropify').dropify(); // Inisialisasi Dropify
    });
</script>

<script>$(document).ready(function () {
  $('.dropify').dropify(); // Inisialisasi Dropify
  $('#content').summernote({
    height: 180,
  });

  let textareaHeight = $("textarea").outerHeight(); // Ambil tinggi textarea
  $(".dropify-wrapper").css({
      "height": textareaHeight, // Samakan tinggi dengan textarea
      "font-size": "24px" // Kecilkan ukuran tulisan
  });

  $(".dropify-message span").css("font-size", "24px"); // Sesuaikan ukuran teks di dalam Dropify
});

</script>





</body>
</html>
