<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sample') - Laravel 新手入門</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <a href="/" id="logo">Sample App</a>
                <nav>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/help">幫助</a></li>
                        <li><a href="#">登入</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>
