@extends('admin.pages.master')

@section('title')
    {{ 'Blog Show' }}
@endsection

@section('style')
    <style>
        .labels {
            font-size: 15px;
            font-weight: bold;
            color: lightgray;
        }

        p {
            margin-top: 1.5px;
        }
    </style>
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
                                    <li class="breadcrumb-item" aria-current="page"><a
                                            href="{{ route('admin.blog.index') }}">Blogs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Show</li>
                                </ol>
                            </nav>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card d-block">
                <div class="card-body">
                    <div class="float-start">
                        <label class="h3">
                            Blog Show
                        </label>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="container rounded bg-white">
                            <div class="row">
                                <!-- Profile Settings Form -->
                                <div class="border-right">
                                    <div class="py-2">
                                        <div class="row mt-3">
                                            <div class="col-md-4 mb-3">
                                                <label class="labels">Category</label>
                                                <p>{{ $blog->category }}</p>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="labels">Title</label>
                                                <p>{{ $blog->title }}</p>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="labels">Content</label>
                                                <p>{{ $blog->content }}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4 mb-3">
                                                <label class="labels">Author</label>
                                                <p>{{ $blog->author }}</p>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="labels">Description</label>
                                                <p>{{ $blog->description }}</p>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="labels">Is Active?</label>
                                                <p>{{ $blog->is_active ? 'Active' : 'Inactive' }}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4 mb-3">
                                                <label class="labels">Image</label>
                                                <p><img width="120px" height="150px" src="<?php echo $blog->getFirstMediaUrl('blog'); ?>"
                                                        alt="..."></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
