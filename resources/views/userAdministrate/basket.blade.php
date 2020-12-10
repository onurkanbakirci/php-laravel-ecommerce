@extends("userAdministrate.user")

@section("userContent")
<div>
    <h5>Siparişlerim</h5>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Sipariş No</th>
            <th scope="col">Ödeme Türü</th>
            <th scope="col">Kargo Bilgileri</th>
            <th scope="col">Durum</th>
            <th scope="col">Sipariş Tarihi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
</div>
@endsection