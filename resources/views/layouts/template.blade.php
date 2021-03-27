<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="4WLuu0lYFWTjB6wzHlrU56jkdPok6JEwuWN1VQa2">

    <title itemprop="name">Pupuk.in</title>
    <!-- Favicon -->
    <link href="/img/logokotak.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="/argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">


    <!-- Argon CSS -->
    <link type="text/css" href="argon/css/argon.css?v=2.0.0" rel="stylesheet">
</head>

<body class="">
    <div class="main-content">
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logopanjang.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Navbar items -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="nav-link-inner--text">Lalala</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="nav-link-inner--text">Lilili</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="nav-link-inner--text">Lululu</span>
                            </a>
                        </li>
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
    </div>
    
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="/argon/vendor/js-cookie/js.cookie.js"></script>
    <script src="/argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="/argon/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
    <!-- Optional JS -->
    <script src="/argon/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="/argon/vendor/chart.js/dist/Chart.extension.js"></script>

    <script src="/argon/vendor/list.js/dist/list.min.js"></script>

    <!-- Argon JS -->
    <script src="/argon/argon/js/argon.js?v=1.0.1"></script>
    <script src="/argon/argon/js/demo.min.js"></script>
</body>

</html>