<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    @yield('head')
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <a href="{{ route('admin.home') }}" id="sidebar-logo">
                <img src="{{ url('assets/image/logo.png') }}" alt="">
            </a>

            <div id="sidebar-menu">
                <a href="{{ route('book.index') }}" class="menu {{ $page == 'game' ? 'active' : '' }}">
                    @if ($page == 'game')
                        <img src="{{ url('assets/image/game-active') }}.png" alt="">
                    @else
                        <img src="{{ url('assets/image/game') }}.png" alt="">
                    @endif
                </a>

                <a href="{{ route('book.index') }}" class="menu {{ $page == 'book' ? 'active' : '' }}">
                    @if ($page == 'book')
                        <img src="{{ url('assets/image/book-active') }}.png" alt="">
                    @else
                        <img src="{{ url('assets/image/book') }}.png" alt="">
                    @endif
                </a>

                <a href="{{ route('book.index') }}" class="menu">
                    <img src="{{ url('assets/image/movie.png') }}" alt="">
                </a>

                <a href="{{ route('book.index') }}" class="menu">
                    <img src="{{ url('assets/image/music.png') }}" alt="">
                </a>
            </div>

            <a href="#" id="sidebar-profile">
                <img src="{{ url('assets/image/profile.png') }}" alt="">
            </a>
        </div>

        <div class="content">
            <div id="page-title">
                @yield('page-title')
            </div>

            <div id="content-inner">
                @yield('content')
            </div>
        </div>
    </div>

    @yield('js')
</body>

</html>
