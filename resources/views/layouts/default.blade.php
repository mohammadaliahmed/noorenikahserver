<!doctype html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    @include('includes.head')
</head>
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
