<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Anti-flicker snippet (recommended)  -->
    <style>
    .async-hide {
        opacity: 0 !important
    }
    </style>
    <script>
    (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() {
            s.className = s.className.replace(RegExp(' ?' + y), '')
        };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
            i();
            h.end = null
        }, c);
        h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
        'GTM-K9BGS8K': true
    });
    </script>

    <!-- Analytics-Optimize Snippet -->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-46172202-22', 'auto', {
        allowLinker: true
    });
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>
    <!-- end Analytics-Optimize Snippet -->

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="DyZfsYZyXlOzvCvI3oc4R0m2WWxeSBzEK8iXfyif">

    <title>Pupuk.in</title>
    <link href="/img/logokotak.png" rel="icon" type="image/png">

    <!-- Favicon -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="/argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">


    <!-- Argon CSS -->
    <link type="text/css" href="/argon/css/argon.css?v=2.0.0" rel="stylesheet">
    <link type="text/css" href="/argon/css/argon.min.css" rel="stylesheet">
    <link type="text/css" href="/css/app.css" rel="stylesheet">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="main-content">
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="img/logopanjang.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header bg-gradient-success py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-9">
                            <h1 class="text-white">Selamat Datang di Pupuk.in</h1>

                            <p class="text-lead text-light mt-3 mb-0">
                                <b>
                                    Log in untuk melakukan aktifitas terhadap pendistribusian pupuk bersubsidi, dan
                                    silahkan
                                    Register jika belum mempunyai akun.
                                    Terima Kasih
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="container mt--8 pb-5">
            <!-- Table -->
            @yield('content')
        </div>
    </div>

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
    <script src="/argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js">
    </script>
    <script src="/argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js">
    </script>
    <script src="/argon/vendor/lavalamp/js/jquery.lavalamp.min.js">
    </script>
    <!-- Optional JS -->
    <script src="/argon/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="/argon/vendor/chart.js/dist/Chart.extension.js">
    </script>


    <!-- Argon JS -->
    <script src="/argon/js/argon.js?v=1.0.1"></script>
    <script src="/argon/js/demo.min.js"></script>
</body>

</html>