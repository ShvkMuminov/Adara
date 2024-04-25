@extends('admin.admin_master')

@section('admin')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Product</li>
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
          <div class="card-header d-flex justify-content-end">
            <a href="{{ route('product.add') }}" class="btn btn-primary float-right">Add to Product</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Category_id</th>
                <th>Image</th>
                <th>Name</th>
                <th>About</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Caunt</th>
                <th>Type</th>
                <th>Sizeable</th>
                <th>Controll</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($products as $item)
                  <tr>
                    <td width="1%">{{ $item->id }}</td>
                    <td width="1%">{{ $item->category_id }}</td>
                    <td width="15%">
                      <img
                      src="{{ asset($item->image) }}"
                      style="width: 90px; height: 60px;">
                    </td>
                    <td>{{ $item->name }}</td>


                    <td>{!! Str::limit($item->about, 50) !!}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->discount }}</td>
                    <td>{{ $item->caunt }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->sizeable }}</td>
                    <td width="12%">
                      <a href="{{ route('product.edit', $item->id) }}" class="btn btn-info" title="Изменять"><i class="fas fa-edit"></i></a>
                      <a href="{{ route('product.delete', $item->id) }}" class="btn btn-danger" title="Выключать" id="delete"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection

