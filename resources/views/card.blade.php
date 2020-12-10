@extends('layouts.app')

@section('content')

<section>
    <div>
        <h3 class="text-center mt-5" style="font-family: 'Roboto Mono', monospace;">Sepetteki Ürünleriniz</h3>
    </div>
    <div class="container">
    <div class="row">
    @if(Session::has('cart') and count(Session::get('cart'))>0)
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Ürün</th>
                    <th scope="col">Adet</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Sil</th>
                    </tr>
                </thead>
                <tbody>
                @foreach(Session::get('cart') as $card)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/productImages/'.$card['src']) }}" style="height:5rem;width:5rem" alt="" title="{{$card['product_name']}}"/>                      
                        </td>
                        <td>
                            <p class="card-title" style="font-family: 'Roboto Mono', monospace;display: block;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;max-width:100%"><small>{{$card["product_name"]}}</small></p>
                            <p class="card-title" style="font-family: 'Roboto Mono', monospace;display: block;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;max-width:100%"><small>Ürün Kodu : 0855567552</small></p>
                        </td>
                        <td>{{$card['qty']}}</td>
                        <td>{{$card['price']}} TL </td>
                        <td>
                        <form class="ml-2" method="POST" action="{{ route('card.destroy', $card['id'] ) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-light" style="font-family: 'Roboto Mono', monospace;">
                                <div class="icon">
                                    <i class="ion ion-android-close"></i>
                                </div>
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
        </div>
        <div class="shadow-sm col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" style="min-height:30rem" >
            <div class="card-body">
                <h5 class="text-center" style="font-family: 'Roboto Mono', monospace;">Sipariş Özeti</h5>
                <h6 style="font-family: 'Roboto Mono', monospace;">Ara Toplam  :  {{$totalPrice}} TL</h6>
                <h6 style="font-family: 'Roboto Mono', monospace;">KDV  :  0 TL</h6>
                <h6 style="font-family: 'Roboto Mono', monospace;">Kargo Ücreti  :  10 TL</h6>
                <div style="height:1px;background-color:black;width:100%"></div>
                <h6 class="text-success my-2" style="font-family: 'Roboto Mono', monospace;">Ödenecek Tutar  :  {{$totalPrice}} TL</h6>
                <a href="/order">
                    <button class="btn btn-success float-center">
                        <p class="card-title text-center" style="font-family: 'Roboto Mono', monospace;">Siparişi Tamamla</p>
                    </button>
                </a>
            </div> 
        </div>
        @else
        <div class="card col-12 shadow-sm" style="height:30rem">
            <div class="card-body">
                <p class="text-center" style="font-family: 'Roboto Mono', monospace;">Sepet Boş</p>
            </div> 
        </div>
        @endif
    </div>
    </div>
</section>
@endsection
