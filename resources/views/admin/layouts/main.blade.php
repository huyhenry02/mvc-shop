<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý trang web</title>
    <link rel="apple-touch-icon" href="/customer/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/customer/img/favicon.ico">
    <link rel="stylesheet" href="/admin/css/styles.min.css" />
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('admin.layouts.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('admin.layouts.header')
        <!--  Header End -->
        @yield('content')
    </div>
</div>
<script src="/admin/libs/jquery/dist/jquery.min.js"></script>
<script src="/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/admin/js/sidebarmenu.js"></script>
<script src="/admin/js/app.min.js"></script>
<script src="/admin/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
