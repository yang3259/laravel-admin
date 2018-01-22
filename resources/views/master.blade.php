<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layout.styles')
    @yield('styles')
</head>

<body class="fixed-sn white-skin">
    {{--引入header--}}
    @include('layout.header')
    {{--引入侧边栏--}}
    @include('layout.sidebar')

    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    {{--引入底部--}}
    {{--@include('layout.footer')--}}
    {{--引入JS--}}
    @include('layout.script')
    @yield('script')
</body>
</html>