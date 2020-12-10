@extends("layouts.app")

@section("content")

<section>
    <div class="container">
        <form  method="POST" action="/order">
        @csrf
        <div class="row d-flex flex-row">
                <div class="card col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
                    <div class="card-body">
                    <h5 class="card-title">Sepettekiler</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Ürün</th>
                                <th scope="col">Adet</th>
                                <th scope="col">Fiyat</th>
                            </tr>
                        </thead>
                        @foreach(Session::get('cart') as $card)
                        <tbody>
                            <tr>
                                <th>
                                    <img src="{{ asset('storage/productImages/'.$card['src']) }}" style="height:3rem;width:3rem" alt="" title="{{$card['product_name']}}"/>                      
                                </th>
                                <th class="font-weight-normal">
                                        {{$card["product_name"]}}
                                </th>
                                <th class="font-weight-normal">
                                    {{$card["qty"]}}        
                                </th>
                                <th class="font-weight-normal">
                                        {{$card["price"]}}TL
                                </th>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>     
                    <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td >
                                Ara Toplam : 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                KDV : 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                KDV Dahil : 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kargo : 
                            </td>
                            </tr>
                        <tr>
                            <td class="font-weight-bold">
                                GENEL TOPLAM : {{$totalPrice}} TL
                            </td>
                        </tr>
                    </tbody>
                    </table>    
                    </div>
                </div>
                    <div class="card col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
                        <div class="card-body">
                            <h5 class="card-title">Teslimat Bilgileri</h5>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">İsim &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text" name="delivery_name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('delivery_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">Soyisim &nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text" name="delivery_lastname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('delivery_lastname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">E mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text" name="delivery_e_mail" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('delivery_e_mail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">Telefon &nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text" name="delivery_phoneNumber" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('delivery_phoneNumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">Posta Kodu</span>
                                </div>
                                    <input type="text" name="delivery_zip_code" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('delivery_zip_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-white border-0" for="inputGroupSelect01">Şehir &nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                </div>
                                <select name="delivery_city" class="custom-select" id="inputGroupSelect_delivery_city">
                                    <option selected>Şeçiniz</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                @error('delivery_city')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-white border-0" for="inputGroupSelect01">İlçe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                </div>
                                <select name="delivery_district" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Şeçiniz</option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                                @error('delivery_district')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0">Adres &nbsp&nbsp&nbsp</span>
                                </div>
                                <textarea name="delivery_address" class="form-control" aria-label="With textarea"></textarea>
                                @error('delivery_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
                    <div class="card-body">
                            <h5 class="card-title">Fatura Bilgileri</h5>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">İsim &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text" name="invoice_name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('invoice_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">Soyisim &nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text" name="invoice_lastname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('invoice_lastname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">E mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text" name="invoice_e_mail" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('invoice_e_mail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">Telefon &nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </div>
                                    <input type="text " name="invoice_phoneNumber" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('invoice_phoneNumber')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0" id="inputGroup-sizing-sm">Posta Kodu </span>
                                </div>
                                    <input type="text" name="invoice_zip_code" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @error('invoice_zip_code')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-white border-0" for="inputGroupSelect01">Şehir &nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                </div>
                                <select name="invoice_city" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Şeçiniz</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                @error('invoice_city')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-white border-0" for="inputGroupSelect01">İlçe  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                </div>
                                <select name="invoice_district" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Şeçiniz</option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                                @error('invoice_district')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white border-0">Adres &nbsp&nbsp&nbsp</span>
                                </div>
                                <textarea name="invoice_address" class="form-control" aria-label="With textarea"></textarea>
                                @error('invoice_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
            </div>
            <div class="col-12 justify-content-center mt-2" style="height:5rem">
                <input type="submit" class="btn btn-success" style="float:right" value="Ödemeye Devam Et"/>
            </div>
            </div>

            </form>
        </div>
</section>
@endsection