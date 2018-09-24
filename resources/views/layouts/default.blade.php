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
    @include('layouts._header')

    <div class="container">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</body>
</html>
