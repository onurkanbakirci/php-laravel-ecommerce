@extends("layouts.app")

@section("content")
<section>
<div class="container">
    <div class="row justify-content-center">
        @foreach($products as $product)
        <div class="card my-1 mx-2 col-sm-4 col-md-3 col-lg-3 col-xs-4 zoom shadow-sm border-0">
            <a class="product-a" href="/product/{{$product->id}}">
                <span class="badge badge-secondary">İkinci El</span>
                <img class="card-img-top" src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}"/>
                <div class="card-body">
                    <p class="card-title text-center text-success" style="font-family: 'Roboto Mono', monospace;">(2. El)</p>
                    <p class="card-title text-center" style="font-family: 'Roboto Mono', monospace;display: block;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;max-width:100%">{{$product->name}}</p>
                    <h6 class="card-title text-center text-success" style="font-family: 'Roboto Mono', monospace;">{{$product->price}}TL</h6>
                </div>
            </a>
            <form class="form-group align-self-center"  method="POST" action="/card" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="btn mx-2 btn-light" style="font-family: 'Roboto Mono', monospace;" data-toggle="modal" data-target="#exampleModalCenter">
                    <small style="font-family: 'Roboto Mono', monospace;">Sepete Ekle</small>
                    <div class="icon">
                        <i class="ion ion-android-cart"></i>
                    </div>
                </button>
                <input type="hidden" value="{{$product->id}}" name="id"/>
            </form>
        </div>
        @endforeach
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sepet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Ürün sepete eklendi.</p>
            </div> 
        </div>
    </div>
</div>
<!-- /Modal -->
</section>
@endsection