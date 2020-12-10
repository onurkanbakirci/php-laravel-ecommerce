@extends('layouts.app')

@section('content')
<!--carousel section-->
<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        @foreach($carousels as $carousel)
            @if($loop->index == 0)
            <div class="carousel-item active">
                <a href="#">
                    <img src="{{ asset('storage/carouselImages/'.$carousel->src) }}" class="d-block w-100" alt="" title="{{$carousel->title}}"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-family: 'Roboto Mono', monospace;">{{$carousel->title}}</h5>
                    </div>
                </a>
            </div>
            @else
            <div class="carousel-item">
                <a href="#">
                    <img src="{{ asset('storage/carouselImages/'.$carousel->src) }}" class="d-block w-100" alt="" title="{{$carousel->title}}"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-family: 'Roboto Mono', monospace;">{{$carousel->title}}</h5>
                    </div>
                </a>
            </div>
            @endif
        @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!--for you section-->
<section>
    <div>
        <h3 class="text-center mt-5" style="font-family: 'Roboto Mono', monospace;">SİZİN İÇİN SEÇİLENLER</h3>
    </div>
    <div class="card-group">
        @foreach($products as $product)
            <div class="card my-1 mx-3 zoom shadow-sm border-0">
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
</section>
<!--new product section-->
<section>
    <div>
        <h3 class="text-center mt-5 mb-2 " style="font-family: 'Roboto Mono', monospace;">EN YENİLER</h3>
    </div>
    <div class="card-group">
        @foreach($products as $product)
            <div class="card my-1 mx-3 zoom shadow-sm border-0">
                <a class="product-a" href="/product/{{$product->id}}">
                    <span class="badge badge-secondary">İkinci El</span>
                    <img class="card-img-top"src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}"/>
                    <div class="card-body">
                        <p class="card-title text-center" style="font-family: 'Roboto Mono', monospace;display: block;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;max-width:100%">{{$product->name}}</p>
                        <h6 class="card-title text-center text-success" style="font-family: 'Roboto Mono', monospace;">{{$product->price}}TL</h6>
                    </div>
                </a>
                <form class="form-group align-self-center"  method="POST" action="/card" enctype="multipart/form-data">
                    @csrf
                    <button type="submit" class="btn mx-2 btn-light" style="font-family: 'Roboto Mono', monospace;">
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
</section>
<!--news section-->
<section>
    <div class="row my-5 justify-content-center ">
        <div class="card col-5 my-1 mx-2 shadow-sm border-0 zoom">
            <a class="product-a" href="/product/{{$product->id}}">
                <img src="{{ asset('dist/img/bottom-link-1.jpg') }}" class="card-img-top" style="opacity: .8"/>
                <h5 class="card-title text-center" style="font-family: 'Roboto Mono', monospace;">Alyans Ürünler</h5>
            </a>
        </div>
        <div class="card col-5 my-1 mx-2 shadow-sm border-0 zoom">
            <a class="product-a" href="/product/{{$product->id}}">
                <img src="{{ asset('dist/img/modern-tektasdlar.jpg') }}" class="card-img-top" style="opacity: .8"/>
                <h5 class="card-title text-center" style="font-family: 'Roboto Mono', monospace;">2000 TL altı ürünler</h5>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
                <div class="card col-12 my-1 shadow-sm border-0 zoom">
                    <a class="product-a" href="/product/{{$product->id}}">
                        <img src="{{ asset('dist/img/banner.jpg') }}" class="card-img-top" style="opacity: .8"/>
                        <h5 class="card-title text-center" style="font-family: 'Roboto Mono', monospace;">Alyans Ürünler</h5>
                    </a>
                </div>
            </div>
        </div>
</section>
<!--new product section-->
<section>
    <div>
        <h3 class="text-center mt-5 mb-2 " style="font-family: 'Roboto Mono', monospace;">EN YENİLER</h3>
    </div>
    <div class="card-group">
        @foreach($products as $product)
            <div class="card my-1 mx-3 zoom shadow-sm border-0">
                <a class="product-a" href="/product/{{$product->id}}">
                    <span class="badge badge-secondary">İkinci El</span>
                    <img class="card-img-top"src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}"/>
                    <div class="card-body">
                        <p class="card-title text-center" style="font-family: 'Roboto Mono', monospace;display: block;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;max-width:100%">{{$product->name}}</p>
                        <h6 class="card-title text-center text-success" style="font-family: 'Roboto Mono', monospace;">{{$product->price}}TL</h6>
                    </div>
                </a>
                <form class="form-group align-self-center"  method="POST" action="/card" enctype="multipart/form-data">
                    @csrf
                    <button type="submit" class="btn mx-2 btn-light" style="font-family: 'Roboto Mono', monospace;">
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
@endsection
