@extends('admin.pages.master')

@section('title')
    {{ 'Blogs' }}
@endsection

@section('style')
    <link href="{{ asset('admin/assets/plugins/bootstrap-table/css/bootstrap-table.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="mt-2">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                                </ol>
                            </nav>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif

                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('error') }}
                                            </div>
                                        @endif
                                        <a href="{{ route('admin.blog.create') }}"
                                            class="btn btn-primary float-end mb-2">Add New Blog</a>

                                        <table id="blog_table" class="table table-striped" data-toggle="tooltip"
                                            data-search="true" data-toolbar="#toolbar" data-sort-name="id"
                                            data-sort-order="asc" data-url="/admin/blog/ajax_listing"
                                            data-page-list="[10, 20, 50]" data-page-size="10" data-pagination="true"
                                            data-side-pagination="server">
                                            <thead>
                                                <tr>
                                                    <th data-field="id" data-sortable="true" data-width="5%">Id</th>
                                                    <th data-field="category" data-sortable="true" data-width="10%">Category
                                                    </th>
                                                    <th data-field="title" data-sortable="true" data-width="10%">Title</th>
                                                    <th data-field="content" data-sortable="true" data-width="15%"> Content
                                                    </th>
                                                    <th data-field="author" data-sortable="true" data-width="10%">Author
                                                    </th>
                                                    <th data-field="image" data-sortable="true" data-width="10%">Image
                                                    </th>
                                                    <th data-field="description" data-sortable="true" data-width="15%">
                                                        Description</th>
                                                    <th data-field="is_active" data-sortable="true" data-width="5%">
                                                        Is Active
                                                    </th>
                                                    <th data-field="action" data-align="center" data-width="10%">Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive -->
                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/assets/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/assets/pages/jquery.bs-table.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap-table/js/bootstrap-table.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/upload.js') }}"></script>
    <script type="text/javascript">
        var table = $("#blog_table");
        $(document).ready(function() {
            table.bootstrapTable({
                'processing': true,
                'serverSide': true
            });
        });

        function remove_blog(id) {
            swal({
                title: "Are you sure delete this blog?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#303841",
                confirmButtonText: 'Delete',
                cancelButtonText: "Cancel",
                closeOnConfirm: true
            }).then(function() {
                $.ajax({
                    url: "{{ route('admin.blog.delete') }}",
                    mehtod: "get",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        table.bootstrapTable('refresh');
                    }
                });
            });
        }

        function change_state(id, status) {
            var status;
            var btnname, message, title;
            if (status == 0) {
                status = 'Inactive';
                btnname = "Inactive";
                message = "Inactive a blog means they are not accessible in app.";
                title = "Inactive blog? ";
            } else {
                status = 'Active';
                btnname = "Active";
                message = "Active a blog will accessible in app.";
                title = "Active blog? ";
            }
            swal({
                title: title,
                text: message,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#303841",
                confirmButtonText: btnname,
                cancelButtonText: "Cancel",
                closeOnConfirm: true
            }).then(function() {
                $.ajax({
                    url: "{{ route('admin.blog.changeStatus') }}",
                    mehtod: "get",
                    data: {
                        id: id,
                        status: status
                    },
                    success: function(data) {
                        table.bootstrapTable('refresh');
                    }
                });

            });
        }
    </script>
@endsection
