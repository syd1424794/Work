<!doctype html>
<html>
<head>
    @include('includes.admin.admin-head')
</head>
<body>
    <div class="admin-panel">
        <div class="main-container">
            @include('includes.admin.sidenav')

            <div class="content-section">
            @include('includes.admin.admin-header')

            <div class="page-main">
                @yield('content')
            </div>

            @include('includes.admin.admin-footer')
            </div>
        </div>
    </div>
</body>
</html>
