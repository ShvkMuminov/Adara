@extends('admin.admin_master')

@section('admin')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Main</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Asosiy</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('all.setting') }}">Main</a></li>
                        <li class="breadcrumb-item active">Main</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('setting.update', $settings->id) }}"
                                  enctype="multipart/form-data">
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
                                                   value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
