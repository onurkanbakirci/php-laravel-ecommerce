@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product</h1>
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
            <form class="form-group"  method="POST" action="/products" enctype="multipart/form-data">
                @csrf
                <div style="height:20rem" class="col-lg-12 card-flex flex-column align-items-center align-self-center">
                    <div class="col-lg-12 d-flex flex-row">
                        <input  type="text" name="name"  placeholder="Product Name" class="ml-1 margin col-lg-2 form-control @error('product name') is invalid @enderror"/>
                        <input  type="text" name="weight" placeholder="Product Weight" class="ml-1 col-lg-2 form-control @error('product weight') is invalid @enderror"/>
                        <input  type="text" name="carat" placeholder="Product Carat" class="ml-1 col-lg-2 form-control @error('product carat') is invalid @enderror"/>
                        <input  type="text" name="stock" placeholder="Product Stock" class="ml-1 col-lg-2 form-control @error('product stock') is invalid @enderror"/>
                        <input  type="text" name="color" placeholder="Product Color" class="ml-1 col-lg-2 form-control @error('product color') is invalid @enderror"/>
                        <input  type="text" name="price" placeholder="Product Price" class="ml-1 col-lg-2 form-control @error('product price') is invalid @enderror"/>
                    </div>
                    <div class="mt-2 col-lg-12 d-flex flex-row">
                        <select class="ml-1 col-lg-3 text-center select-with-search form-control pmd-select2" style="width: 100%" name="rock_id">
                            @foreach($rocks as $rock)
                                <option value="{{$rock->id}}">{{$rock->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-2 col-lg-12 d-flex flex-row">
                        <select class="ml-1 col-lg-3 text-center select-with-search form-control pmd-select2" style="width: 100%" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <input  type="file" name="image" placeholder="Product Image" class="ml-1 col-lg-3 form-control @error('product name') is invalid @enderror"/>
                    </div>
                    <input  type="submit" class="mt-1 d-flex mx-auto col-lg-3 btn btn-primary text-center" value="Add Product"/>
                </div>
            </form>
          </div>
        </div>
        <!-- /.row (main row) -->
    </section>
@endsection
