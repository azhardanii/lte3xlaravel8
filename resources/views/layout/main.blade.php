@include('layout.top')
@include('layout.side')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h4>Halaman @yield('title')</h4>
        </div>        
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        @yield('content')
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layout.foot')
  
