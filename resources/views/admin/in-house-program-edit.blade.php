<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | In House Program Edit</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">


    <style>
        .dropdown-menu-custom {
            display: none;
            padding-left: 15px;
        }

        .dropdown-hover:hover .dropdown-menu-custom {
            display: block;
        }
    </style>
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
                <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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
                            <a href="{{ route('admin.international-list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    International
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sub-international-list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Sub International
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.international-list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    International
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tailor-program-list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Tailor Program
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.in-house-program-list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    In House Program
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.hourly-based-program-list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Hourly Based Program
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
                        <li class="nav-item dropdown-hover">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Homepage Management
                                    <i class="fas fa-angle-down right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview dropdown-menu-custom">
                                <li class="nav-item">
                                    <a href="{{ route('admin.programs-list') }}" class="nav-link">
                                        <p>Programs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.clients-list') }}" class="nav-link">
                                        <p>Clients</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.about-us-list') }}" class="nav-link">
                                        <p>About Us</p>
                                    </a>
                                </li>
                            </ul>
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
                            <h1 class="m-0">Edit In House Program</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit In House Program</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="container mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit In House Program</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('in-house-program-update', $inHousePrograms->id) }}" method="POST"
                            enctype="multipart/form-data" class="custom-validation">
                            @csrf
                            @method('PUT')

                            </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label for="sub_reason_title" class="form-label">Sub Reason Title</label>
                                    <input type="text" id="sub_reason_title" name="sub_reason_title" class="form-control"
                                        value="{{ old('sub_reason_title') }}" required>
                                </div>

                               <div class="form-group mb-3">
                                    <label for="sub_reason_description" class="form-label">Sub Reason Description</label>
                                    <textarea name="sub_reason_description" id="sub_reason_description" cols="30" rows="5" class="form-control" required>{{ old('sub_reason_description') ? strip_tags(old('sub_reason_description')) : '' }}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label for="program_title" class="form-label">Program Title</label>
                                    <input type="text" id="program_title" name="program_title" class="form-control"
                                        value="{{ old('program_title') }}" required>
                                </div>

                                <div class="form-group mb-3 col-md-6">
                                    <label for="program_duration" class="form-label">Program Duration</label>
                                    <input type="text" id="program_duration" name="program_duration" class="form-control"
                                        value="{{ old('program_duration') }}" required>
                                </div>
                            </div>

                                <div class="form-group mb-3">
                                    <label for="program_description" class="form-label">Program Description</label>
                                    <textarea name="program_description" id="program_description" cols="30" rows="5" class="form-control" required>{{ old('program_description') ? strip_tags(old('program_description')) : '' }}</textarea>
                                </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label for="program_image" class="form-label">Upload Image</label>
                                    <input type="file" id="program_image" name="program_image" class="form-control dropify"
                                        data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg"
                                        required />
                                    <small>Note: Ukuran gambar maksimal 2MB</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label for="highlights_title" class="form-label">Highlights Title</label>
                                    <input type="text" id="highlights_title" name="highlights_title" class="form-control"
                                        value="{{ old('highlights_title') }}" required>
                                </div>

                               <div class="form-group mb-3">
                                    <label for="highlights_description" class="form-label">Highlights Description</label>
                                    <textarea name="highlights_description" id="highlights_description" cols="30" rows="5" class="form-control" required>{{ old('highlights_description') ? strip_tags(old('highlights_description')) : '' }}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label for="program_delivery_title" class="form-label">Program Delivery Title</label>
                                    <input type="text" id="program_delivery_title" name="program_delivery_title" class="form-control"
                                        value="{{ old('program_delivery_title') }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="program_delivery_description" class="form-label">Program Delivery Description</label>
                                    <textarea name="program_delivery_description" id="program_delivery_description" cols="30" rows="5" class="form-control" required>{{ old('program_delivery_description') ? strip_tags(old('program_delivery_description')) : '' }}</textarea>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="target_audience_description" class="form-label">Target Audience Description</label>
                                <textarea name="target_audience_description" id="target_audience_description" cols="30" rows="5" class="form-control" required>{{ old('target_audience_description') ? strip_tags(old('target_audience_description')) : '' }}</textarea>
                            </div>

                            <div class="text-right mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
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
        $(document).ready(function() {
            console.log(typeof $.fn.dropify); // Cek apakah Dropify termuat
            $('.dropify').dropify(); // Inisialisasi Dropify
        });
    </script>

    <script>
        $(document).ready(function() {
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
