@extends("layouts.admin")

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Prodcuts</h1>
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
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Category</th>
                      <th scope="col">Rock</th>
                      <th scope="col">Weight</th>
                      <th scope="col">Color</th>
                      <th scope="col">Stock</th>
                      <th scope="col">Price</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($datas as $product)
                    <tr>
                      <th scope="row">{{$product->id}}</th>
                      <td>
                        <img src="{{ asset('storage/productImages/'.$product->src) }}" style="height:2rem;width:2rem;" alt="" title=""/>
                      </td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->category_id}}</td>
                      <td>{{$product->rock}}</td>
                      <td>{{$product->weight}}</td>
                      <td>{{$product->color}}</td>
                      <td>{{$product->stock}}</td>
                      <td>{{$product->price}}</td>
                      <td>
                        <a href="/products/{{$product->id}}/edit">
                          <img type="submit" src="{{ asset('dist/img/edit.png') }}" class="ml-2" style="height:1rem;width:1rem"/>
                        </a>
                      </td>
                      <td>
                        <form class="ml-2" method="POST" action="{{ route('products.destroy', $product->id) }}">
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
