@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Category</h1>
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
            <form class="form-group"  method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div style="height:20rem" class="col-lg-12 card-flex flex-column align-items-center align-self-center">
                    <div class="col-lg-12 d-flex flex-row">
                        <input  type="text" name="name" value="{{$category->name}}" placeholder="{{$category->name}}" class="ml-1 margin col-lg-2 form-control @error('category name') is invalid @enderror"/>
                    </div>
                    <div class="mt-2 col-lg-12 d-flex flex-row">
                        <input  type="file" name="image" placeholder="{{$category->src}}" placeholder="Category Image" class="ml-1 col-lg-3 form-control @error('category name') is invalid @enderror"/>
                    </div>
                    <input  type="submit" class="mt-1 d-flex mx-auto col-lg-3 btn btn-primary text-center" value="Update Category"/>
                </div>
            </form>
          </div>
        </div>
        <!-- /.row (main row) -->
    </section>
@endsection
