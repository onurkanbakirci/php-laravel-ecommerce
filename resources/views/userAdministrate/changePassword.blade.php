@extends("userAdministrate.user")

@section("userContent")
    <form>
        <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5 justify-content-center">
            <h4 style="font-family: 'Roboto Mono', monospace;" class="font-weight-bold my-4">Şifre Değiştir</h4>
        </div>
        <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
            <div class="input-group-prepend col-4">
                <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Eski Şifre : </span>
            </div>
            <input type="text" name="user_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
            <div class="input-group-prepend col-4">
                <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Yeni Şifre :</span>
            </div>
            <input type="text" name="user_last_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5">
            <div class="input-group-prepend col-4">
                <span style="font-family: 'Roboto Mono', monospace;" class="input-group-text bg-white border-0 font-weight-bold" id="inputGroup-sizing-default">Yeni Şifre :<br>(Tekrar)</span>
            </div>
            <input type="text" name="user_e_mail" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        
        <div class="input-group mb-3 col-12 col-sm-12 col-md-5 col-xl-5 col-lg-5 justify-content-center">
            <input style="font-family: 'Roboto Mono', monospace;" type="submit" class="btn btn-success" value="Değişiklikleri Kaydet"/>
        </div>
        </form>
@endsection