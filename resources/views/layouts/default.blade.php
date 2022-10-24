<!doctype html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    @include('includes.head')
</head>
<style>
    .redBg{
        background-color: #B70002;
        color: #fff;
    } .redBg:hover{
        border: 1px solid #B70002;
        color: #B70002;

    }
</style>
<body style="background-color: #efefef">
<div class="container">
    <header class="row">
        @include('includes.header')
    </header>
    <div id="main" class="row">
        @yield('content')
    </div>
{{--    <footer class="row">--}}
{{--        @include('includes.footer')--}}
{{--    </footer>--}}
</div>
</body>
</html>
