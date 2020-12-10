@extends("layouts.admin")

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Orders</h1>
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
                      <th scope="col">OrderID</th>
                      <th scope="col">ShippingFirstName</th>
                      <th scope="col">ShippingLasttName</th>
                      <th scope="col">ShippingEmail</th>
                      <th scope="col">ShippingPhoneNumber</th>
                      <th scope="col">ShippingAddress</th>
                      <th scope="col">ShippingCountry</th>
                      <th scope="col">ShippingCity</th>
                      <th scope="col">ShippingZipCode</th>
                      <th scope="col">BillingFirstName</th>
                      <th scope="col">BillingLastName</th>
                      <th scope="col">BillingEmail</th>
                      <th scope="col">BillingPhoneNumber</th>
                      <th scope="col">BillingAddress</th>
                      <th scope="col">BillingZipCode</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($orders as $order)
                    <tr>
                      <th scope="row">{{$order->id}}</th>
                      <td>{{$order->order_id}}</td>
                      <td>{{$order->shipping_first_name}}</td>
                      <td>{{$order->shipping_last_name}}</td>
                      <td>{{$order->shipping_email}}</td>
                      <td>{{$order->shipping_phone_number}}</td>
                      <td>{{$order->shipping_address}}</td>
                      <td>{{$order->shipping_country}}</td>
                      <td>{{$order->shipping_city}}</td>
                      <td>{{$order->shipping_zip_code}}</td>
                      <td>{{$order->billing_first_name}}</td>
                      <td>{{$order->billing_last_name}}</td>
                      <td>{{$order->billing_email}}</td>
                      <td>{{$order->billing_phone_number}}</td>
                      <td>{{$order->billing_address}}</td>
                      <td>{{$order->billing_zip_code}}</td>
                      <td>
                        <a href="/orders/{{$order->id}}/edit">
                          <img type="submit" src="{{ asset('dist/img/edit.png') }}" class="ml-2" style="height:1rem;width:1rem"/>
                        </a>
                      </td>
                      <td>
                        <form class="ml-2" method="POST" action="{{ route('orders.destroy', $order->id) }}">
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
