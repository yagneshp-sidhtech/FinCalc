@extends('admin.pages.master')

@section('title')
    {{ 'Blog Edit' }}
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
                                    <li class="breadcrumb-item active" aria-current="page">Blog Edit</li>
                                </ol>
                            </nav>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Blog Form</h4>
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
                            <form action="{{ route('admin.blog.update', $blog) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <input type="text" class="form-control @error('category') is-invalid @enderror"
                                            name="category" id="category" placeholder="Enter Category"
                                            value="{{ old('category', $blog->category) }}">
                                        @error('category')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" id="title" placeholder="Enter Title"
                                            value="{{ old('title', $blog->title) }}">
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-4 col-md-6">
                                        <label for="content" class="form-label">Content</label>
                                        <input type="text" class="form-control @error('content') is-invalid @enderror"
                                            name="content" id="content" value="{{ old('content', $blog->content) }}"
                                            placeholder="Enter Content">
                                        @error('content')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label for="author" class="form-label">Author</label>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror"
                                            name="author" id="author" value="{{ old('author', $blog->author) }}"
                                            placeholder="Enter Author">
                                        @error('author')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                        <img class="mt-2" src="<?php echo $blog->getFirstMediaUrl('blog'); ?>" height="80px" width="80px"
                                            alt="Image" />
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter Description">{{ old('description', $blog->description) }}</textarea>
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
        </div>
    </div>
@endsection
