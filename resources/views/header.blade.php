<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="css/main.css" rel="stylesheet">
        <title>Hello World</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3 main-logo">
                        <a href="/">
                            <img src="data:image/png;base64,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">
                        </a>
                    </div>
                    <div class="col-xs-9">
                        <ul class="main-menu">
                           <li class="main-menu-item {{ $page == 'index' ? 'active' : '' }}">
                                <a href="/">Home</a>
                            </li>
                            <li class="main-menu-item {{ $page == 'articles' ? 'active' : '' }}">
                                <a href="/article">Articles</a>
                            </li>
                            <li class="main-menu-item {{ $page == 'chat' ? 'active' : '' }}">
                                <a href="/chat">Chat</a>
                            </li>
                            <li class="main-menu-item {{ $page == 'register' ? 'active' : '' }}">
                                <a href="/register">Register</a>
                            </li>
                            <li class="main-menu-item {{ $page == 'about-us' ? 'active' : '' }}">
                                <a href="/about_us">About us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
            @yield('content')

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="">(c) some footer information</p>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script src="https://cnd.jsdelivr.net/"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ36NYwkjwyJi2wHM0uMTTAKijwBJzXUU&callback=initMap"></script>
    </body>
</html>