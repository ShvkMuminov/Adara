@extends('admin.admin_master')

@section('admin')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Main</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Main</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if($settings == null)
                        <form method="POST" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Site logo </label>
                                        <input type="file" name="site_logo" class="form-control-file"
                                               id="exampleFormControlFile1">
                                        @error('site_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">left image </label>
                                        <input type="file" name="left_image" class="form-control-file"
                                               id="exampleFormControlFile1">
                                        @error('left_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"> Top left image </label>
                                        <input type="file" name="top_left_image" class="form-control-file"
                                               id="exampleFormControlFile1">
                                        @error('top_left_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"> Top right image </label>
                                        <input type="file" name="top_right_image" class="form-control-file"
                                               id="exampleFormControlFile1">
                                        @error('top_right_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"> Bottom image </label>
                                        <input type="file" name="bottom_image" class="form-control-file"
                                               id="exampleFormControlFile1">
                                        @error('bottom_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"> Full bg image </label>
                                        <input type="file" name="full_bg_image" class="form-control-file"
                                               id="exampleFormControlFile1">
                                        @error('full_bg_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Site title</label>
                                        <input type="text" name="site_title"
                                               class="form-control">
                                        @error('site_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Site about</label>
                                        <input type="text" name="site_about"
                                               class="form-control">
                                        @error('site_about')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone"
                                               class="form-control">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email"
                                               class="form-control">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address"
                                               class="form-control">
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Stock name</label>
                                        <input type="text" name="stock_name"
                                               class="form-control">
                                        @error('stock_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Stock category id</label>
                                        <input type="text" name="stock_category_id"
                                               class="form-control">
                                        @error('stock_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <input type="submit" class="btn btn-rounded btn-primary btn-sm"
                                               value="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted"> site logo</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    <img src="{{ asset($settings->site_logo) }}" class="img-thumbnail">
                                                </span>
                                    </div>
                                </div>
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted"> Left image</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    <img src="{{ asset($settings->left_image) }}" class="img-thumbnail">
                                                </span>
                                    </div>
                                </div>
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted"> Top left image</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    <img src="{{ asset($settings->top_right_image) }}" class="img-thumbnail">
                                                </span>
                                    </div>
                                </div>
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted"> Top right image</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    <img src="{{ asset($settings->top_right_image) }}" class="img-thumbnail">
                                                </span>
                                    </div>
                                </div>
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Bottom image</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    <img src="{{ asset($settings->bottom_image) }}" class="img-thumbnail">
                                                </span>
                                    </div>
                                </div>
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Full bg image </span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    <img src="{{ asset($settings->full_bg_image) }}" class="img-thumbnail">
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Address</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    {{ $settings->address }}
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Phone</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    {{ $settings->phone }}
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Site Name</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    {{ $settings->site_title }}
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Email</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    {{ $settings->email }}
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Stock </span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    {!! $settings->stock_name !!}
                                                </span>
                                    </div>
                                </div>
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">About</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    {!! $settings->site_about !!}
                                                </span>
                                    </div>
                                </div>
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                                <span
                                                    class="info-box-text text-center text-muted">Stock category id</span>
                                        <span class="info-box-number text-center text-muted mb-0">
                                                    {!! $settings->stock_category_id!!}
                                                </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('setting.edit', $settings->id) }}"
                                       class="btn btn-primary float-right btn-sm">Update</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
