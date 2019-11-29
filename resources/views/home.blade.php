<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAROGAN</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/index.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script> -->
    <script defer src="{{ asset('js/Chatbot.js') }}"></script>

</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="row between-xs">
                <div class="col-xs-2">
                    <a href="#" class="navbar-brand">Hijrah</a>
                </div>
                <div class="col-xs-4">
                    <div class="nav-items">
                        <a href="/posts">Forum</a>
                        <a href="/team">Tentang</a>
                        <a href="#">Bagikan</a>
                        @if (Route::has('login'))
                        <!-- <div class="top-right links"> -->
                            @auth
                            <form action="{{ route('logout') }}" id="logout" method="POST">
                                @csrf
                            </form>
                            <a class="a" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
                            @endauth
                        <!-- </div> -->
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-xs-6">
                <div class="heading">
                    <img src="{{ asset('img/logo.png') }}" class="logo">
                    <h1>Tuangkan, <br>Keluh kesahmu.</h1>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="core">
                    <div class="core-wrapper">
                        <div id="chat">
                            <div class="chat-container">
                            </div>
                        </div>
                        <div class="suggest-input">
                            <a href="#" class="suggest">Senang</a>
                            <a href="#" class="suggest">Marah</a>
                            <a href="#" class="suggest">Sedih</a>
                            <a href="#" class="suggest">Malas</a>
                            <a href="#" class="suggest">Sakit</a>
                        </div>
                        <footer class="form">
                            <form action="#">
                                <input type="text" class="input" placeholder="Tuliskan Pesan" autofocus>
                                <button><i class="icon ion-md-send"></i></button>
                            </form>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
