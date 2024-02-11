<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flashboard | Dashboard</title>
    {{-- css --}}
    @include('admin.assets.css')
    {{-- css --}}
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
         @include('admin.includes.preloader')
        <!-- Preloader -->
        <!-- Navbar -->
         @include('admin.includes.navbar')
        <!-- /Navbar -->
        <!-- Main Sidebar Container -->
         <!-- Sidebar -->
         @include('admin.includes.sidebar')
         <!-- /Sidebar -->
        <!-- Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            @yield('content-header')
            <!-- /Content Header -->
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
            <!-- Footer -->
            @include('admin.includes.footer')
            <!-- /Footer -->
    </div>
    <!-- ./wrapper -->
    {{-- js --}}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
    @include('admin.assets.js')
    {{-- js --}}
</body>
</html>