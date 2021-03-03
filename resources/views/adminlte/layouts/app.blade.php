@extends('adminlte.parties.header')
<!-- Site wrapper -->
<!-- Navbar -->
@extends('adminlte.parties.navbar')
<!-- /.navbar -->

  <!-- Main Sidebar Container -->
@extends('adminlte.parties.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content-header')

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@extends('adminlte.parties.footer')