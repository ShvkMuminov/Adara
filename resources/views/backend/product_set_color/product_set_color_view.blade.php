@extends('admin.admin_master')

@section('admin')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Product set  color</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Product set color</li>
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
            <a href="{{ route('product_set_color.add') }}" class="btn btn-primary float-right">Add a product set color</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>product_id</th>
                <th>color_id</th>
                <th>Controll</th>
              </tr>
              </thead>
              <tbody>
                @foreach (  $product_set_colors as $item)
                  <tr>
                    <td width="1%">{{ $item->id }}</td>
                    <td>{{ $item->product_id }}</td>
                    <td>{{ $item->color_id }}</td>


                    <td width="12%">
                      <a href="{{ route('product_set_color.edit', $item->id) }}" class="btn btn-info" title="Изменять"><i class="fas fa-edit"></i></a>
                      <a href="{{ route('product_set_color.delete', $item->id) }}" class="btn btn-danger" title="Выключать" id="delete"><i class="fas fa-trash"></i></a>
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

