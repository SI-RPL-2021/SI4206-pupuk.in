<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="4WLuu0lYFWTjB6wzHlrU56jkdPok6JEwuWN1VQa2">

    <title itemprop="name">Pupuk.in</title>
    <!-- Favicon -->
    <link href="{{asset ('/img/logokotak.png')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('/argon/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('argon/css/argon.css?v=2.0.0')}}" rel="stylesheet">
    @stack('css')
</head>

<body class="">
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white transi"
        id="sidenav-main">
        <div class="scroll-wrapper scrollbar-inner scroll-scrollx_visible" style="position: relative;">
            <div class="scrollbar-inner scroll-content scroll-scrollx_visible scroll-scrolly_visible"
                style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 724px;">
                <div class="sidenav-header d-flex align-items-center">
                    <a class="navbar-brand text-center" href="/">
                        <img src="{{asset('/img/logopanjang.png')}}" />
                    </a>
                    <div class="ml-auto">
                        <!-- Sidenav toggler -->
                        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                            data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-inner">
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Nav items -->
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('admin.dashboard')}}">
                                    <i class="ni ni-shop text-primary"></i>
                                    <span class="nav-link-text">Dashboards</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link collapsed" href="#navbar-tables" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-align-left-2 text-default"></i>
                                    <span class="nav-link-text">Tables</span>
                                </a>
                                <div class="collapse " id="navbar-tables">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item ">
                                            <a href="{{route('admin.distributor')}}" class="nav-link">Table
                                                Distributor</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="{{route('admin.petani')}}" class="nav-link">Table Petani</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link collapsed" href="#navbar-tambah" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tambah">
                                    <i class="ni ni-single-copy-04 text-primary"></i>
                                    <span class="nav-link-text">Tambah Data</span>
                                </a>
                                <div class="collapse " id="navbar-tambah">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item ">
                                            <a href="{{route('admin.pupuk')}}" class="nav-link">Tambah Pupuk</a>
                                        </li>
                                        <!-- <li class="nav-item ">
                                            <a href="#"
                                                class="nav-link">AddDistributor</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="scroll-element scroll-x scroll-scrollx_visible scroll-scrolly_visible">
                <div class="scroll-element_outer">
                    <div class="scroll-element_size"></div>
                    <div class="scroll-element_track"></div>
                    <div class="scroll-bar" style="width: 10px; left: 0px;"></div>
                </div>
            </div>
            <div class="scroll-element scroll-y scroll-scrollx_visible scroll-scrolly_visible">
                <div class="scroll-element_outer">
                    <div class="scroll-element_size"></div>
                    <div class="scroll-element_track"></div>
                    <div class="scroll-bar" style="height: 60px; top: 0px;"></div>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                    <!-- Collapse header -->
                    <!-- Navbar items -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <hr class="d-lg-none" />
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="" src="/img/photo/{{ Auth::user()->photo}}">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome! {{ Auth::user()->name }}</h6>
                                </div>
                                <a href="/profile" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="{{route('distributor.data')}}" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Add Data</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    <span>{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="py-5">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-lg-left text-muted">
                            &copy; 2021 <a href="/" class="font-weight-bold ml-1" target="_blank">Pupuk.in</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- <script src="/argon/vendor/js-cookie/js.cookie.js"></script> -->
    <script src="{{asset('/argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('/argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
    <!-- <script src="/argon/vendor/lavalamp/js/jquery.lavalamp.min.js"></script> -->
    <!-- Optional JS -->
    <script src="{{asset('/argon/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('/argon/vendor/chart.js/dist/Chart.extension.js')}}"></script>

    <!-- <script src="/argon/vendor/list.js/dist/list.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <!-- Argon JS -->
    <!-- <script src="/argon/argon/js/argon.js?v=1.0.1"></script> -->
    <!-- <script src="/argon/argon/js/demo.min.js"></script> -->
    @stack('js')



</body>

</html>