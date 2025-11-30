<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>
        Denpasar Hotel School Dashboard
    </title>
    <!-- Dropify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('../css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('../css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('../css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- Ini buat style tambahan biar cakep --}}
    <style>
        .soft-input {
            background: #f8f9fa !important;
            border: 1px solid #ddd !important;
            border-radius: 10px !important;
            padding: 12px !important;
            box-shadow: none !important;
        }

        .soft-textarea {
            background: #f8f9fa !important;
            border: 1px solid #ddd !important;
            border-radius: 10px !important;
            padding: 12px !important;
            min-height: 120px;
            box-shadow: none !important;
        }

        .soft-label {
            font-weight: 600;
            margin-bottom: 6px;
        }

        .btn-pink {
            background: #ff2f7b;
            border: none;
            color: white;
            border-radius: 10px;
            padding: 10px 22px;
            font-weight: 600;
        }

        .btn-pink:hover {
            opacity: .9;
            transition: .2s;
        }
    </style>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand px-4 py-3 m-0"
                href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <span class="ms-1 text-sm text-dark">Denpasar Hotel School</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0 mb-2">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('dashboard') }}">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                {{-- News & Event --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('news-list') }}">
                        <i class="material-symbols-rounded opacity-5">newspaper</i>
                        <span class="nav-link-text ms-1">News & Events</span>
                    </a>
                </li>

                {{-- Gallery --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('gallery-list') }}">
                        <i class="material-symbols-rounded opacity-5">photo_library</i>
                        <span class="nav-link-text ms-1">Gallery</span>
                    </a>
                </li>

                {{-- International --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.international-list') }}">
                        <i class="material-symbols-rounded opacity-5">public</i>
                        <span class="nav-link-text ms-1">International</span>
                    </a>
                </li>

                {{-- Sub International --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.sub-international-list') }}">
                        <i class="material-symbols-rounded opacity-5">subdirectory_arrow_right</i>
                        <span class="nav-link-text ms-1">Sub International</span>
                    </a>
                </li>

                {{-- National --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.national-list') }}">
                        <i class="material-symbols-rounded opacity-5">flag</i>
                        <span class="nav-link-text ms-1">National</span>
                    </a>
                </li>

                
                {{-- Sub National --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.sub-national-list') }}">
                        <i class="material-symbols-rounded opacity-5">subdirectory_arrow_right</i>
                        <span class="nav-link-text ms-1">Sub National</span>
                    </a>
                </li>

                {{-- Pendaftaran --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('pendaftaran.list') }}">
                        <i class="material-symbols-rounded opacity-5">app_registration</i>
                        <span class="nav-link-text ms-1">Pendaftaran</span>
                    </a>
                </li>
                
                {{-- Tailor Program --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.tailor-program-list') }}">
                        <i class="material-symbols-rounded opacity-5">design_services</i>
                        <span class="nav-link-text ms-1">Tailor Program ( Perbaikan )</span>
                    </a>
                </li>

                {{-- Sub Tailor Program --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.sub-tailor-program-list') }}">
                        <i class="material-symbols-rounded opacity-5">subdirectory_arrow_right</i>
                        <span class="nav-link-text ms-1">Sub Tailor Program ( Perbaikan )</span>
                    </a>
                </li>

                {{-- In-House Program --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.in-house-program-list') }}">
                        <i class="material-symbols-rounded opacity-5">home_repair_service</i>
                        <span class="nav-link-text ms-1">In-House Program ( Perbaikan )</span>
                    </a>
                </li>

                {{-- Hourly Based Program --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('admin.hourly-based-program-list') }}">
                        <i class="material-symbols-rounded opacity-5">timer</i>
                        <span class="nav-link-text ms-1">Hourly Based Program ( Perbaikan )</span>
                    </a>
                </li>

                {{-- Team --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('team-list') }}">
                        <i class="material-symbols-rounded opacity-5">groups</i>
                        <span class="nav-link-text ms-1">Team</span>
                    </a>
                </li>

                {{-- Homepage Management (Dropdown style) --}}
                <li class="nav-item">
                    <a class="nav-link text-dark d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" href="#homepageManagement" role="button" aria-expanded="false"
                        aria-controls="homepageManagement">
                        <div>
                            <i class="material-symbols-rounded opacity-5">web</i>
                            <span class="nav-link-text ms-1">Homepage Management</span>
                        </div>
                        <i class="material-symbols-rounded opacity-5">expand_more</i>
                    </a>

                    <div class="collapse" id="homepageManagement">
                        <ul class="nav flex-column ms-4">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('admin.programs-list') }}">
                                    <span class="nav-link-text">Programs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('admin.clients-list') }}">
                                    <span class="nav-link-text">Clients</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('admin.about-us-list') }}">
                                    <span class="nav-link-text">About Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Logout --}}
                <li class="nav-item mt-3">
                    <form action="{{ route('logout') }}" method="GET">
                        @csrf
                        <button type="submit"
                            class="nav-link text-dark bg-transparent border-0 d-flex align-items-center">
                            <i class="material-symbols-rounded opacity-5">logout</i>
                            <span class="nav-link-text ms-1">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>

    </aside>

    <!-- Main content -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav d-flex align-items-center  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="profile.html" class="nav-link text-body font-weight-bold px-0">
                                <i class="material-symbols-rounded">account_circle</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>

    <!--   Core JS Files   -->

    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
    <script src="js/plugins/chartjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

    <script>
        $('.dropify').dropify();
    </script>

    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    label: "Views",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "#43A047",
                    data: [50, 45, 22, 28, 50, 60, 76],
                    barThickness: 'flex'
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#e5e5e5'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                lineHeight: 2
                            },
                            color: "#737373"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#737373',
                            padding: 10,
                            font: {
                                size: 14,
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
                datasets: [{
                    label: "Sales",
                    tension: 0,
                    borderWidth: 2,
                    pointRadius: 3,
                    pointBackgroundColor: "#43A047",
                    pointBorderColor: "transparent",
                    borderColor: "#43A047",
                    backgroundColor: "transparent",
                    fill: true,
                    data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        callbacks: {
                            title: function(context) {
                                const fullMonths = ["January", "February", "March", "April", "May", "June",
                                    "July", "August", "September", "October", "November", "December"
                                ];
                                return fullMonths[context[0].dataIndex];
                            }
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [4, 4],
                            color: '#e5e5e5'
                        },
                        ticks: {
                            display: true,
                            color: '#737373',
                            padding: 10,
                            font: {
                                size: 12,
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#737373',
                            padding: 10,
                            font: {
                                size: 12,
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Tasks",
                    tension: 0,
                    borderWidth: 2,
                    pointRadius: 3,
                    pointBackgroundColor: "#43A047",
                    pointBorderColor: "transparent",
                    borderColor: "#43A047",
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [4, 4],
                            color: '#e5e5e5'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#737373',
                            font: {
                                size: 14,
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [4, 4]
                        },
                        ticks: {
                            display: true,
                            color: '#737373',
                            padding: 10,
                            font: {
                                size: 14,
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="js/material-dashboard.min.js?v=3.2.0"></script>

</body>

</html>
