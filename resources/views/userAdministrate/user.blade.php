@extends("layouts.app")

@section("content")
<section>
    <div class="row">
        <!-- nav -->
        <div class="col-12 col-sm-12 col-xl-3 col-lg-3" style="min-height:30rem">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item border my-2 mx-2 ">
                <a class="nav-link text-center text-dark"  href="/user">Hesabım</a>
            </li>
            <li class="nav-item border my-2 mx-2 ">
                <a class="nav-link text-center text-dark"  href="{{ route('card.index') }}">Sepetim</a>
            </li>
            <li class="nav-item border  my-2 mx-2">
                <a class="nav-link text-center text-dark" href="/user/basket">Siparişlerim</a>
            </li>
            <li class="nav-item border  my-2 mx-2">
                <a class="nav-link text-center text-dark" href="/user/changePassword">Şifre Değiştir</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit" class="btn">Çıkış</button>
            </form>
            <li class="nav-item border  my-2 mx-2">
                <a class="nav-link text-center text-dark" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    Çıkış Yap
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            </ul>
        </div>
        <!-- content -->
        @if(Request::is('user'))
        <div class="card col-12 col-sm-12 col-xl-9 col-lg-9">
            <form>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5 justify-content-center">
                    <h4 style="font-family: 'Roboto Mono', monospace;" class="font-weight-bold my-4">Hesabım</h4>
                </div>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
                    <div class="input-group-prepend col-4">
                        <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">İsim : </span>
                    </div>
                    <input type="text" name="user_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
                    <div class="input-group-prepend col-4">
                        <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Soyisim :</span>
                    </div>
                    <input type="text" name="user_last_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
                    <div class="input-group-prepend col-4">
                        <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Mail Adresi :</span>
                    </div>
                    <input type="text" name="user_e_mail" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
                    <div class="input-group-prepend col-4">
                        <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Doğum Tarihi:</span>
                    </div>
                    <select name="user_born_day" class="custom-select" id="inputGroupSelect_card_last_mount">
                        <option selected>Gün</option>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <select name="user_born_month" class="custom-select" id="inputGroupSelect_card_last_year">
                        <option selected>Ay</option>
                        @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <select name="user_born_year" class="custom-select" id="inputGroupSelect_card_last_year">
                        <option selected>Yıl</option>
                        @for ($i = 1930; $i <= 2010; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
                    <div class="input-group-prepend col-4">
                        <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Cinsiyet : </span>
                    </div>
                    <select name="user_gender" class="custom-select" id="inputGroupSelect_card_last_year">
                        <option selected>Cinsiyet</option>
                            <option value="Kız">Kız</option>
                            <option value="Erkek">Erkek</option>
                    </select>
                </div>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
                    <div class="input-group-prepend col-4">
                        <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Telefon No :</span>
                    </div>
                    <input type="text" name="user_phone_number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5 justify-content-center">
                    <input style="font-family: 'Roboto Mono', monospace;" type="submit" class="btn btn-success" value="Değişiklikleri Kaydet"/>
                </div>
            </form>
        </div>
        @else
        <div class="card col-12 col-sm-12 col-xl-9 col-lg-9">
            @yield('userContent')   
        </div>
        @endif
    </div>
</section>

@endsection