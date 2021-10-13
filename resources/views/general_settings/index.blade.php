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
                                <form class="m-t-25">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" accept=".png, .svg" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
                                <form class="m-t-25">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" accept=".png, .svg" class="custom-file-input" id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
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
                        <form class="m-t-25">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Teks Halaman Login</h4>
                                    <h6 class="card-subtitle">Ketikkan kalimat pada <code>kolom di bawah ini</code>, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_title_1}}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_desc_1}}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 m-t-25 text-center">
                                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                        <form class="m-t-25">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Teks Halaman Registrasi</h4>
                                    <h6 class="card-subtitle">Ketikkan kalimat pada <code>kolom di bawah ini</code>, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_title_2}}">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input name="" type="text" class="form-control" maxlength="255" value="{{$Gsetting->home_text->home_text_desc_2}}">
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
                                <form class="m-t-25">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" accept=".png, .jpg, .jpeg, .gif" class="custom-file-input" id="inputGroupFile03">
                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
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
                                <form class="m-t-25">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" accept=".png, .jpg, .jpeg, .gif" class="custom-file-input" id="inputGroupFile04">
                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
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
                                <form class="m-t-25">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="submit">Upload</button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" accept=".png, .jpg, .jpeg" class="custom-file-input" id="inputGroupFile05">
                                            <label class="custom-file-label" for="inputGroupFile05">Choose file</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-4 m-t-10">
                                <img class="d-flex mr-3" src="{{$Gsetting->favicon}}" width="70" alt="Logo Website Zakat Masjid Baiturrahman">
                            </div>
                        </div>
                        <form class="m-t-25">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Title Website</h4>
                                    <h6 class="card-subtitle">Ketikkan pada <code>kolom di bawah ini</code>, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" maxlength="255" value="{{$Gsetting->title}}">
                                    </div>
                                    <button type="submit" class="m-t-10 btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade show" id="social" aria-labelledby="social-tab">
                        <form class="m-t-25">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <h4 class="card-title">Link Akun Sosial</h4>
                                    <h6 class="card-subtitle">Ketikkan url pada <code>kolom di bawah ini</code>, kemudian <code>Submit</code>.</h6>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="row m-t-10">
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" maxlength="255" value="{{$Gsetting->phone}}">
                                        </div>
                                        <div class="col-md-2">
                                            <small class="badge badge-default badge-success text-white">Whatsapp</small>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" maxlength="255" value="{{$Gsetting->email}}">
                                        </div>
                                        <div class="col-md-2">
                                            <small class="badge badge-default badge-danger text-white">Email</small>
                                        </div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" maxlength="255" value="{{$Gsetting->address}}">
                                        </div>
                                        <div class="col-md-2">
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
@endsection
