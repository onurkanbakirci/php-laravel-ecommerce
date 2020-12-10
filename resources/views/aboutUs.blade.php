@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="card-group col-12">
            <div class="card col-lg-6 col-sm-6 col-md-6 col-xs-12 justify-content-center">
                <img src="{{ asset('dist/img/Altın Tarz.svg') }}" style="width:100%" alt="Instagram Logo" style="opacity: .8"/>
            </div>
            <div class="card card col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <h3 style="font-family: 'Roboto Mono', monospace;" class="text-center">Hakkımızda</h3>
                <p style="font-family: 'Roboto Mono', monospace;">
                    &#8287&#8287&#8287&#8287&#8287  Altın Tarz, kullanılmış olan altınları hızlı kargo, çeşitlilik ve güvenilirlik ile sizlerle buluşturuyor. 
                    <br>
                    <br>
                    &#8287&#8287&#8287&#8287&#8287  Kurum olarak kuyumculardan darphanelere gönderilmekte olan 2. el altınları
                    bu süreçten alarak birçok bütçeye uygun olarak sizlerle buluşturmaktayız. Aynı zamanda ürünler için hazırlanmış olan
                    detaylı görsel ve açıklamalar ile aradığınız ürünü kolaylıkla bulmanızda kolaylık sağlamaktayız.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection