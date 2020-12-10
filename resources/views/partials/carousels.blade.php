<?php
  //use \App\Http\Controllers\AdminController;
?>
@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Carousel</h1>
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
            <div class="small-box">
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Image</th>
                      <th scope="col">Title</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($carousels as $carousel)
                    <tr>
                      <td>
                        <img src="{{ asset('storage/carouselImages/'.$carousel->src) }}" style="height:2rem;width:2rem;" alt="" title=""/>
                      </td>
                      <td>{{$carousel->title}}</td>
                      <td>
                        <a href="/carousels/{{$carousel->id}}/edit">
                          <img type="submit" src="{{ asset('dist/img/edit.png') }}" class="ml-2" style="height:1rem;width:1rem"/>
                        </a>
                      </td>
                      <td>
                        <form class="ml-2" method="POST" action="{{ route('carousels.destroy', $carousel->id) }}">
                          @csrf
                          {{ method_field('DELETE') }}
                          <input type="submit" class="bg-danger" value="Sil"/>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
    </section>
@endsection
