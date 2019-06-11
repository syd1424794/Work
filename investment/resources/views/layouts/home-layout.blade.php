<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="body-wrapper">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </div>
</html>
