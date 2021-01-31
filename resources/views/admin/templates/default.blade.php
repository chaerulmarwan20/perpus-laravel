<!DOCTYPE html>
<html>

@include('admin.templates.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include('admin.templates.partials.header')
    @include('admin.templates.partials.sidebar')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ Breadcrumbs::current()->title }}
        </h1>
        {{ Breadcrumbs::render() }}
        {{-- <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol> --}}
      </section>

      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
    </div>

    @include('admin.templates.partials.footer')
    @include('admin.templates.partials.control')
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  @include('admin.templates.partials.script')
</body>

</html>
