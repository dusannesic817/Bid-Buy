<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BidBuy') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('welcome.index')}}" style="color: #014675; font-size:26px;">
                    <img src="/storage/logos/logo_bid_buy.png" alt="Logo" width="130px"  class="d-inline-block align-text-top" style="margin-top:-10px">
                    {{ config('app.name', 'BidBuy') }}
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <form class="mx-auto" style="width: 800px;">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" style="border-color: #f79420;">
                            <button class="input-group-text" id="basic-addon1" style="border-color: #f79420"><i class="bi bi-search" style="color:#85c440"></i></button>
                        </div>
                    </form>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item d-flex flex-row">
                                    
                                    <a class="nav-link" href="javascript:void(0)" id="loginLink" style="color: #f79420; font-size:18px"><i class="bi bi-box-arrow-in-right me-1" data-bs-toggle="modal" data-bs-target="#logModal"></i>{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item d-flex flex-row">
                                    <a class="nav-link" href="javascript:void(0)" id="registerLink" data-bs-toggle="modal" data-bs-target="#regModal">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item d-flex flex-row">
                                <a class="nav-link" href="{{route('auction.create')}}" style="color: #f79420; font-size:18px"><i class="bi bi-plus-circle"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
        <div id="myModal"></div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
$(document).ready(function(){
    $("#registerLink").click(function(){
        var registerUrl = "{{ route('register') }}";
        $("#myModal").load(registerUrl + " #regModal", function(){
            $('#regModal').modal('show');
        });
    });

    $("#loginLink").click(function(){
        var loginUrl = "{{ route('login') }}";
        $("#myModal").load(loginUrl + " #logModal", function(){
            $('#logModal').modal('show');
        });
    });
});

    </script>
</body>
</html>
