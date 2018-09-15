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
    @include('layout._header')

    <div class="container">
        @yield('content')
        @include('layout._footer')
    </div>
</body>
</html>
