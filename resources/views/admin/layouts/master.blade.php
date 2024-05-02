@include('admin.includes.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
</div>
@include('admin.includes.navbar')
@include('admin.includes.sidebar')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     @yield('content')
</div>
@include('admin.includes.footer')
@include('admin.includes.foot')
