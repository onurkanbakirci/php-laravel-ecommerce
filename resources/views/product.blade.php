@extends('layouts.app')

@section('content')
<section>
    <div class="my-3">
        <div class="row container mx-auto justify-content-center align-self-center">
            <button type="button" class="card d-flex flex-row  my-1 col-lg-6 col-xl-6 col-sm-12 col-md-12" data-toggle="modal" data-target="#exampleModalCenter">
                <img class="card-img-top"src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}">
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img class="card-img-top"src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal -->
            <div class="card d-flex flex-row  my-1 col-lg-6 col-xl-6 col-sm-12 col-md-12 border-0">
                <div class="card-body">
                <h5 class="card-title text-center">{{$product->name}}</h5>
                <p style="font-family: 'Roboto Mono', monospace" class="d-flex justify-content-center align-items-center">
                    <small >{{$product->weight}} Ayar |</small>
                    <small >  {{$product->rock}}</small>
                </p>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="font-family: 'Roboto Mono', monospace">Taş</td>
                                <td style="font-family: 'Roboto Mono', monospace">{{$product->rock}}</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto Mono', monospace">Ağırlık</th>
                                <td style="font-family: 'Roboto Mono', monospace">{{$product->weight}} gr.</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto Mono', monospace">Ayar (Karat)</th>
                                <td style="font-family: 'Roboto Mono', monospace">{{$product->carat}}</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto Mono', monospace">Stok</th>
                                <td style="font-family: 'Roboto Mono', monospace">{{$product->stock}}</td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Roboto Mono', monospace">Renk</th>
                                <td style="font-family: 'Roboto Mono', monospace">{{$product->color}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="font-family: 'Roboto Mono', monospace" class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('dist/img/cargo.svg') }}" style="height:3rem;width:3rem" alt="Cargo Logo" style="opacity: .8"/>
                        <small class="mx-3" style="font-family: 'Roboto Mono', monospace">Tahmini Kargoya Veriliş Tarihi : 28 Ekim 2020</small>
                    </p>
                    <h3 class="card-title text-success text-center" style="font-family: 'Roboto Mono', monospace">{{$product->price}}₺ </h3>
                    <div  class="d-flex flex-row justify-content-center align-items-center">
                        <form class="form-group col-9"  method="POST" action="/card" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$product->id}}" name="id"/>
                            <button type="submit" class="col-12 btn btn-success mx-2 " style="font-family: 'Roboto Mono', monospace;">
                                <small style="font-family: 'Roboto Mono', monospace;">Sepete Ekle</small>
                                <div class="icon">
                                    <i class="ion ion-android-cart"></i>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container d-flex flex-row">
        <button type="button" class="card d-flex flex-row mb-2 col-1 border-0" data-toggle="modal" data-target="#exampleModalCenter">
            <img class="card-img-top shadow-sm" src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}">
        </button>
        <button type="button" class="card d-flex flex-row  mb-2 col-1 border-0" data-toggle="modal" data-target="#exampleModalCenter">
            <img class="card-img-top shadow-sm" src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}">
        </button>
        <button type="button" class="card d-flex flex-row  mb-2 col-1 border-0" data-toggle="modal" data-target="#exampleModalCenter">
            <img class="card-img-top shadow-sm" src="{{ asset('storage/productImages/'.$product->src) }}" alt="" title="{{$product->title}}">
        </button>
    </div>
</section>
<section>
    <div class="container">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p style="font-family: 'Roboto Mono', monospace" class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('dist/img/plus.svg') }}" style="height:2rem;width:2rem" alt="Cargo Logo" style="opacity: .8"/>
                        <small class="mx-3" style="font-family: 'Roboto Mono', monospace">Ürün Özellikleri</small>
                    </p>
                </button>
            </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Ürün kodu</td>
                            <td style="font-family: 'Roboto Mono', monospace">465463512684651</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Ürün ismi</td>
                            <td style="font-family: 'Roboto Mono', monospace">{{$product->name}}</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Taş</td>
                            <td style="font-family: 'Roboto Mono', monospace">{{$product->rock}}</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Ağırlık</th>
                            <td style="font-family: 'Roboto Mono', monospace">{{$product->weight}} gr.</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Ayar (Karat)</th>
                            <td style="font-family: 'Roboto Mono', monospace">{{$product->carat}}</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Stok</th>
                            <td style="font-family: 'Roboto Mono', monospace">{{$product->stock}}</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Renk</th>
                            <td style="font-family: 'Roboto Mono', monospace">{{$product->color}}</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Kargo</th>
                            <td style="font-family: 'Roboto Mono', monospace">5 iş günü içerisinde kargoya verilir.</td>
                        </tr>
                    </tbody>
                </table>               
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <p style="font-family: 'Roboto Mono', monospace" class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('dist/img/plus.svg') }}" style="height:2rem;width:2rem" alt="Cargo Logo" style="opacity: .8"/>
                        <small class="mx-3" style="font-family: 'Roboto Mono', monospace">Teslimat - İade</small>
                    </p>
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <h5 style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Teslimat</h5>
                <p style="font-family: 'Roboto Mono', monospace">
                &#8287&#8287&#8287&#8287&#8287Siparişlerinizin kargoya teslimat tarihleri ürün sayfasında gösterildiği gibidir. Siz sayfayı açtığınızda bu tarih sistemimiz tarafından oluşturulur. Türkiye içerisindeki siparişler ücretsiz olarak Yurtiçi Kargo ile, Yurtdışı siparişler ise UPS ile gönderilir.<br>
                </p>
                <h5 style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Sipariş Takibi</h5>
                <p style="font-family: 'Roboto Mono', monospace">
                &#8287&#8287&#8287&#8287&#8287Bir sipariş kargoya teslim edildiğinde tarafınıza bir email gönderilir. Tüm ürünler kargoya verildiğinde Atasay Kuyumculuk tarafından sigortalanır. Bu sebepten dolayı kargo takip numarasının sisteme girişi ertesi iş günü olmaktadır.<br>
                </p>
                <h5 style="font-family: 'Roboto Mono', monospace" class="font-weight-bold">Değişim ve İade</h5>
                <p style="font-family: 'Roboto Mono', monospace">
                &#8287&#8287&#8287&#8287&#8287Siparişlerinizi size ulaştıktan 14 gün içerisinde değiştirebilir ya da iade edebilirsiniz. Ancak, yüzük ölçüsü seçimi yapılan, üzerine yazı yazılan, özel olarak üretim istenen ya da gerektiren ürünler iade alınamaz ve iptal edilemez.<br>
                    Önemli: Aynı Gün Teslimat Hizmeti ile satın alınan ürünlerin, tahsil edilen teslimat ücreti fatura ödeme tutarından mahsup edilerek sadece ürün fiyatı iade edilir. Yurtdışı Teslimat yapılan ürünlerin,tahsil edilen teslimat ücreti fatura ödeme tutarından mahsup edilerek sadece ürün fiyatı iade edilir.
                    Önemli: Alyanslar ve tamtur özelliği taşıyan ürünler, isteğe özel kişiselleştirilmiş ürünler siparişinize özel olarak üretileceğinden dolayı iade alınmayacak ve iptal edilmeyecektir. Alyans, tamtur, harf ve boy seçimi vs kişiye özel üretim olarak işleme alınan siparişler, iade alınamamaktadır ve iptal edilememektedir.
                </p>
            </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div>
        <h3 class="text-center mt-5 mb-2 " style="font-family: 'Roboto Mono', monospace;">İlginizi Çekebilecek Diğer Ürünler</h3>
    </div>
    <div class="card-group">
        @foreach($otherProducts as $otherProduct)
            <div class="card my-1 mx-3 zoom shadow-sm border-0">
                <a class="product-a" href="/product/{{$product->id}}">
                    <img class="card-img-top"src="{{ asset('storage/productImages/'.$otherProduct->src) }}" alt="" title="{{$otherProduct->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-family: 'Roboto Mono', monospace;">{{$otherProduct->name}}</h5>
                        <h6 class="card-title text-center text-success" style="font-family: 'Roboto Mono', monospace;">{{$otherProduct->price}}TL</h6>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
@endsection
