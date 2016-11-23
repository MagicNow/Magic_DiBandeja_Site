<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@include('admin.partials.htmlheader')

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.partials.mainheader')

    @include('admin.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('admin.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

   

    @include('admin.partials.footer')

</div><!-- ./wrapper -->

@include('admin.partials.scripts')

</body>
</html>