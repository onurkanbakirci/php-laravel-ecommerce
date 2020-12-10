@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-6">
            <!-- small box -->
            <form class="form-group"  method="POST" action="/categories" enctype="multipart/form-data">
                @csrf
                <div style="height:5rem" class="col-lg-12 d-flex flex-row ">
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th score="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input  type="text" name="name" placeholder="Category Name" class="form-control @error('category name') is invalid @enderror"/>
                      </td>
                      <td>
                        <input  type="file" name="image" placeholder="Product Image" class="form-control @error('category name') is invalid @enderror"/>
                      </td>
                      <td>
                        <input  type="submit" class="btn btn-primary" value="Add Category"/>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </form>
          </div>
        </div>
        <!-- /.row (main row) -->
    </section>
@endsection
