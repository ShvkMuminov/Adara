@extends('admin.admin_master')

@section('admin')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Offer</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Asosiy</a></li>
          <li class="breadcrumb-item active">Offer</li>
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
            <a href="{{ route('offer.add') }}" class="btn btn-primary float-right">  Add an offer</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>First bg image</th>
                <th>Second bg image</th>
                <th>First title</th>
                <th>Second title</th>
                <th>Image</th>
                <th>Content</th>
                <th>Controll</th>


              </tr>
              </thead>
              <tbody>
                @foreach ($offers as $item)
                  <tr>
                    <td width="1%">{{ $item->id }}</td>


                    <td width="15%">
                      <img
                      src="{{ asset($item->first_bg_image) }}"
                      style="width: 90px; height: 60px;">
                    </td>
                    <td width="15%">

                        <img
                        src="{{ asset($item->second_bg_image) }}"
                        style="width: 90px; height: 60px;">
                      </td>
                    <td>{{ $item->first_title }}</td>
                    <td>{{ $item->second_title }}</td>

                    <td>{{ $item->content }}</td>
                    <td width="15%">
                        <img
                        src="{{ asset($item->image) }}"
                        style="width: 90px; height: 60px;">
                      </td>

                    <td width="20%">
                       <a href="{{ route('offer.edit', $item->id) }}" class="btn btn-info" title="Изменять"><i class="fas fa-edit"></i></a>
                      <a href="{{ route('offer.delete', $item->id) }}" class="btn btn-danger" title="Выключать" id="delete"><i class="fas fa-trash"></i></a>
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

