<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
    @include('admin.partials.head')

    @yield('style')
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Menu ========== -->
        @include('admin.pages.menu')
        <!-- ========== Left menu End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <!-- ========== Topbar Start ========== -->
            @include('admin.pages.topbar')
            <!-- ========== Topbar End ========== -->

            @yield('content')
            <!-- content -->

            <!-- Footer Start -->

            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    @include('admin.partials.script')

    @yield('script')
</body>

</html>
