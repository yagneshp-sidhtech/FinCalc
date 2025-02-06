@extends('admin.pages.master')

@section('title')
    {{ 'Dashboard' }}
@endsection

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <a href="">
                                        <div class="avatar-sm bg-danger rounded">
                                            <i class="fa-solid fa-diagram-project avatar-title font-22 text-white"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <a href="">
                                            <h3 class="text-dark my-1"><span>10</span></h3>
                                            <h3 class="text-muted mb-1 text-truncate">Portfolio Category</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
                <!-- end page title -->
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <a href="">
                                        <div class="avatar-sm bg-blue rounded">
                                            <i class="fa-solid fa-briefcase avatar-title font-22 text-white"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <a href="">
                                            <h3 class="text-dark my-1"><span>10</span></h3>
                                            <h2 class="text-muted mb-1 text-truncate">Portfolio</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <a href="">
                                        <div class="avatar-sm bg-success rounded">
                                            <i class="fa-solid fa-bullseye avatar-title font-22 text-white"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <a href="">
                                            <h3 class="text-dark my-1"><span>10</span></h3>
                                            <h2 class="text-muted mb-1 text-truncate">Career</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <a href="">
                                        <div class="avatar-sm bg-warning rounded">
                                            <i class="fa-solid fa-blog avatar-title font-22 text-white"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <a href="">
                                            <h3 class="text-dark my-1"><span>10</span></h3>
                                            <h2 class="text-muted mb-1 text-truncate">Blog</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
