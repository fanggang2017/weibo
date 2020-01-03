<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>@yield('title', 'Weibo App') - Laravel Study</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

@include('layouts._header')

<div class="container">
    <div class="offset-md-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
    </div>
</div>

</body>
</html>
