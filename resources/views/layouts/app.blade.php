<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('dist/img/.svg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Altın Tarz</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
      <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <!-- Product style -->
     <link rel="stylesheet" href="{{ asset('dist/css/productCard.css') }}">
</head>
<body style="overflow-x:hidden" class="mx-0 px-0">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#F8F9FA">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('dist/img/Altın Tarz.svg') }}" style="height:4rem;width:8rem" alt="Instagram Logo" style="opacity: .8"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-dark" style="font-family: 'Roboto Mono', monospace;"  href="/lastProduct">En Yeniler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" style="font-family: 'Roboto Mono', monospace;" href="/opportunity">Fırsatlar</a>
                            </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-dark" style="font-family: 'Roboto Mono', monospace;" href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark" style="font-family: 'Roboto Mono', monospace;" href="{{ route('register') }}">{{ __('Üye Ol') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark" style="font-family: 'Roboto Mono', monospace;"  href="/user">
                                    {{ Auth::user()->name }}
                                </a>
            <!--
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/user" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Çıkış Yap
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
            -->
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link text-dark" style="font-family: 'Roboto Mono', monospace;" href="/card">
                                <div class="icon">
                                    <i class="ion ion-android-cart">
                                    @if(Session::has("cart") and count(Session::get("cart")))
                                        <span class="badge badge-danger navbar-badge">
                                            {{count(Session::get("cart"))}}
                                        </span>
                                    @endif
                                    </i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
                <!-- Footer -->
        <footer class="page-footer font-small indigo " style="background-color:#F8F9FA">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h6 style="font-family: 'Roboto Mono', monospace;" class="font-weight-bold text-uppercase mt-3 mb-4">Kurumsal</h6>

                <ul class="list-unstyled">
                     <li>
                        <a style="font-family: 'Roboto Mono', monospace;" class="footer-a" href="/hakkimizda">Hakkımızda</a>
                    </li>
                    <li>
                        <a style="font-family: 'Roboto Mono', monospace;" class="footer-a" href="#!">Müşteri Hizmetleri</a>
                    </li>
                </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h6 style="font-family: 'Roboto Mono', monospace;" class="font-weight-bold text-uppercase mt-3 mb-4">GÜVENLİK</h6>

                <ul class="list-unstyled">
                    <li>
                    <a style="font-family: 'Roboto Mono', monospace;" class="footer-a"  href="#!">Kullanım Şartları</a>
                    </li>
                    <li>
                        <a style="font-family: 'Roboto Mono', monospace;" class="footer-a"  href="/mesafeli-satıs-sözlesmesi">Mesafeli Satış Sözleşmesi</a>
                    </li>
                    <li>
                    <a style="font-family: 'Roboto Mono', monospace;" class="footer-a"  href="/iade-degisim">İade ve Değişim</a>
                    </li>
                </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h6 style="font-family: 'Roboto Mono', monospace;" class="font-weight-bold text-uppercase mt-3 mb-4">İLETİŞİM</h6>

                <ul class="list-unstyled">
                    <li>
                        <a style="font-family: 'Roboto Mono', monospace;">info@tarzaltin.com</a>
                    </li>
                    <li>
                        <a style="font-family: 'Roboto Mono', monospace;">0850 xxx xx xx</a>
                    </li>
                </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h6 style="font-family: 'Roboto Mono', monospace;" class="font-weight-bold text-uppercase mt-3 mb-4">Sosyal Medya</h6>

                <ul class="list-inline">
                    <li class="list-inline-item my-2">
                        <a href="#!">
                            <img src="{{ asset('dist/img/socialmedia/facebook.svg') }}" style="height:3rem;width:3rem" alt="Facebook Logo" style="opacity: .8"/>
                        </a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a href="#!">
                            <img src="{{ asset('dist/img/socialmedia/instagram.svg') }}" style="height:3rem;width:3rem" alt="Instagram Logo" style="opacity: .8"/>
                        </a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a href="#!">
                            <img src="{{ asset('dist/img/socialmedia/twitter.svg') }}" style="height:3rem;width:3rem" alt="Instagram Logo" style="opacity: .8"/>
                        </a>
                    </li>
                    <li class="list-inline-item my-2">
                        <a href="#!">
                            <img src="{{ asset('dist/img/socialmedia/pinterest.svg') }}" style="height:3rem;width:3rem" alt="Instagram Logo" style="opacity: .8"/>
                        </a>
                    </li>
                </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">Copyright © 2020
                <a href="/"> altintarz.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
