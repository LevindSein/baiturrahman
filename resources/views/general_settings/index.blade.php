@extends("template.index")

@section('content-title')
Pengaturan&nbsp;Umum
@endsection

@section('content-body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-control-record"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" id="text-tab" data-toggle="tab" href="#text" role="tab" aria-controls="text"><span class="hidden-sm-up"><i class="ti-control-record"></i></span> <span class="hidden-xs-down">Teks</span></a></li>
                    <li class="nav-item"> <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo"><span class="hidden-sm-up"><i class="ti-control-record"></i></span> <span class="hidden-xs-down">Logo</span></a></li>
                </ul>
                <div class="tab-content tabcontent-border p-20" id="myTabContent">
                    <div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title">Gambar Login</h4>
                                <h6 class="card-subtitle">Klik <code>Choose file</code> atau <code>Browse</code> dibawah ini, kemudian <code>Upload</code>.</h6>
                                <form class="m-t-25" id="gambarLoginForm" action="{{url('gsetting/gambar_login')}}" method="post" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" id="gambarLoginInput" name="gambarLoginInput" accept=".png" class="custom-file-input">
                                            <label class="custom-file-label" for="gambarloginInput">Choose file</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-4 m-t-10">
                                <img class="d-flex mr-3" src="{{$Gsetting->home_img_1}}" width="200" alt="Gambar Login Zakat Masjid Baiturrahman">
                            </div>
                        </div>
                        <div class="mt-5"></div>
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title">Gambar Registrasi</h4>
                                <h6 class="card-subtitle">Klik <code>Choose file</code> atau <code>Browse</code> dibawah ini, kemudian <code>Upload</code>.</h6>
                                <form class="m-t-25" id="gambarRegistrasiForm" action="{{url('gsetting/gambar_registrasi')}}" method="post" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" id="gambarRegistrasiInput" name="gambarRegistrasiInput" accept=".png" class="custom-file-input">
                                            <label class="custom-file-label" for="gambarRegistrasiInput">Choose file</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-4 m-t-10">
                                <img class="d-flex mr-3" src="{{$Gsetting->home_img_2}}" width="200" alt="Gambar Registrasi Zakat Masjid Baiturrahman">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade show" id="text" aria-labelledby="text-tab">
                        <form class="m-t-25" id="loginForm">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Teks Halaman Login</h4>
                                    <h6 class="card-subtitle">Ketikkan <code>kalimat</code> pada <code>kolom</code> di bawah ini, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="loginTitleInput" autocomplete="off" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_title_1}}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="loginDescInput" autocomplete="off" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_desc_1}}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 m-t-25 text-center">
                                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                        <form class="m-t-25" id="registrasiForm">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Teks Halaman Registrasi</h4>
                                    <h6 class="card-subtitle">Ketikkan <code>kalimat</code> pada <code>kolom</code> di bawah ini, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="registrasiTitleInput" autocomplete="off" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_title_2}}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="registrasiDescInput" autocomplete="off" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_desc_2}}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 m-t-25 text-center">
                                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade show" id="logo" aria-labelledby="logo-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title">Logo Dashboard</h4>
                                <h6 class="card-subtitle">Klik <code>Choose file</code> atau <code>Browse</code> dibawah ini, kemudian <code>Upload</code>.</h6>
                                <form class="m-t-25" id="logoDashboardForm" action="{{url('gsetting/logo_dashboard')}}" method="post" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" id="logoDashboardInput" name="logoDashboardInput" accept=".png, .jpg, .jpeg, .gif" class="custom-file-input">
                                            <label class="custom-file-label" for="logoDashboardInput">Choose file</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-4 m-t-10">
                                <img class="d-flex mr-3" src="{{$Gsetting->logo_img}}" width="100" alt="Logo Dashboard Zakat Masjid Baiturrahman">
                            </div>
                        </div>
                        <div class="mt-5"></div>
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title">Logo Teks Dashboard</h4>
                                <h6 class="card-subtitle">Klik <code>Choose file</code> atau <code>Browse</code> dibawah ini, kemudian <code>Upload</code>.</h6>
                                <form class="m-t-25" id="logoTextDashboardForm" action="{{url('gsetting/logo_text_dashboard')}}" method="post" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" id="logoTextDashboardInput" name="logoTextDashboardInput" accept=".png, .jpg, .jpeg, .gif" class="custom-file-input">
                                            <label class="custom-file-label" for="logoTextDashboardInput">Choose file</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-4 m-t-10">
                                <img class="d-flex mr-3" src="{{$Gsetting->logo_text}}" width="100" alt="Logo Text Dashboard Zakat Masjid Baiturrahman">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="title-tab" data-toggle="tab" href="#title" role="tab" aria-controls="title" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-control-record"></i></span> <span class="hidden-xs-down">Title</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social"><span class="hidden-sm-up"><i class="ti-control-record"></i></span> <span class="hidden-xs-down">Sosial</span></a></li>
                </ul>
                <div class="tab-content tabcontent-border p-20" id="myTabContent">
                    <div role="tabpanel" class="tab-pane fade show active" id="title" aria-labelledby="title-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title">Logo Title Website</h4>
                                <h6 class="card-subtitle">Klik <code>Choose file</code> atau <code>Browse</code> dibawah ini, kemudian <code>Upload</code>.</h6>
                                <form class="m-t-25" id="faviconForm" action="{{url('gsetting/favicon')}}" method="post" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="faviconInput" id="faviconInput" accept=".png, .jpg, .jpeg" class="custom-file-input">
                                            <label class="custom-file-label" for="faviconInput">Choose file</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-4 m-t-10">
                                <img class="d-flex mr-3" src="{{$Gsetting->favicon}}" width="70" alt="Logo Website Zakat Masjid Baiturrahman">
                            </div>
                        </div>
                        <form class="m-t-25" id="titleForm">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Title Website</h4>
                                    <h6 class="card-subtitle">Ketikkan <code>kalimat</code> pada <code>kolom</code> di bawah ini, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="titleInput" autocomplete="off" class="form-control" maxlength="50" value="{{$Gsetting->title}}">
                                    </div>
                                    <button type="submit" class="m-t-10 btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                        <form class="m-t-25" id="footerForm">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Footer Website</h4>
                                    <h6 class="card-subtitle">Ketikkan <code>kalimat</code> pada <code>kolom</code> di bawah ini, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="footerInput" autocomplete="off" class="form-control" maxlength="255" value="{{$Gsetting->footer}}">
                                    </div>
                                    <button type="submit" class="m-t-10 btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade show" id="social" aria-labelledby="social-tab">
                        <form class="m-t-25" id="sosialForm">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Akun Sosial</h4>
                                    <h6 class="card-subtitle">Ketikkan <code>url</code> pada <code>kolom</code> di bawah ini, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="row m-t-10">
                                        <div class="col-md-6">
                                            <input type="text" id="waInput" name="waInput" autocomplete="off" maxlength="255" class="form-control" maxlength="255" value="{{$Gsetting->phone}}">
                                        </div>
                                        <div class="col-md-6">
                                            <small class="badge badge-default badge-success text-white">Whatsapp</small>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-6">
                                            <input type="text" id="emailInput" name="emailInput" autocomplete="off" maxlength="255" class="form-control" maxlength="255" value="{{$Gsetting->email}}">
                                        </div>
                                        <div class="col-md-6">
                                            <small class="badge badge-default badge-danger text-white">Email</small>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-6">
                                            <input type="text" id="mapsInput" name="mapsInput" autocomplete="off" maxlength="255" class="form-control" maxlength="255" value="{{$Gsetting->address}}">
                                        </div>
                                        <div class="col-md-6">
                                            <small class="badge badge-default badge-warning text-white">Maps</small>
                                        </div>
                                    </div>
                                    <button type="submit" class="m-t-10 btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content-js')
<script>
    const fileBlocks = document.querySelectorAll('.custom-file');
    [...fileBlocks].forEach(function (block) {
        block.querySelector('input[type="file"]').onchange = function () {
            const filename = this.files[0].name;
            block.querySelector('.custom-file-label').textContent = filename.slice(0, 30);
        }
    })
</script>

<script>
$(document).ready(function(){
    $('#titleForm').submit(function(e){
		e.preventDefault();
        let dataset = {
            titleInput : $('#titleInput').val()
        }
        updateAjax("title", dataset);
    });

    $('#footerForm').submit(function(e){
		e.preventDefault();
        let dataset = {
            footerInput : $('#footerInput').val()
        }
        updateAjax("footer", dataset);
    });

    $('#sosialForm').submit(function(e){
		e.preventDefault();
        let dataset = {
            waInput : $('#waInput').val(),
            emailInput : $('#emailInput').val(),
            mapsInput : $('#mapsInput').val(),
        }
        updateAjax("sosial", dataset);
    });

    $('#loginForm').submit(function(e){
		e.preventDefault();
        let dataset = {
            loginTitleInput : $('#loginTitleInput').val(),
            loginDescInput : $('#loginDescInput').val(),
        }
        updateAjax("login", dataset);
    });

    $('#registrasiForm').submit(function(e){
		e.preventDefault();
        let dataset = {
            registrasiTitleInput : $('#registrasiTitleInput').val(),
            registrasiDescInput : $('#registrasiDescInput').val(),
        }
        updateAjax("registrasi", dataset);
    });

    function updateAjax(jumpto, dataset){
        return $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
			url: "/gsetting/" + jumpto,
            cache:false,
			method:"POST",
            data:dataset,
			dataType:"json",
			success:function(data)
			{
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                };
                toastr.success(data.message);
			},
            error:function(data){
                console.log(data.responseJSON.errors);
                toastr.options = {
                    "closeButton": true,
                    "preventDuplicates": true,
                };
                toastr.error("Kesalahan sistem.");
            }
		});
    }
});
</script>
@endsection
