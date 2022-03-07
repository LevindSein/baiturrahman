@extends("template.index")

@section('content-title')
Rumusan
@endsection

@section('content-body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#fitrah" role="tab" aria-controls="fitrah" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-control-record"></i></span> <span class="hidden-xs-down">Fitrah</span></a></li>
                </ul>
                <div class="tab-content tabcontent-border p-20" id="myTabContent">
                    <div role="tabpanel" class="tab-pane fade show active" id="fitrah" aria-labelledby="fitrah-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h4 class="card-title">Rumus Zakat Fitrah</h4>
                                <h6 class="card-subtitle">Masukkan nilai <code>Rupiah dan Bobot/Orang</code> untuk <code>Rumus Zakat Fitrah</code> di bawah ini, kemudian <code>Submit</code>.</h6>
                                <form class="m-t-25" id="fitrahForm ">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess" class="col-sm-12 col-md-2 col-form-label">1 Liter =</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputHorizontalSuccess" placeholder="Masukkan harga">
                                        </div>
                                        <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label"> Rupiah</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess" class="col-sm-12 col-md-2 col-form-label">1 Kilogram =</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputHorizontalSuccess" placeholder="Masukkan harga">
                                        </div>
                                        <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label"> Rupiah</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess" class="col-sm-12 col-md-2 col-form-label">1 Orang =</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputHorizontalSuccess" placeholder="Masukkan volume">
                                        </div>
                                        <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label"> Liter</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputHorizontalSuccess" class="col-sm-12 col-md-2 col-form-label">1 Orang =</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputHorizontalSuccess" placeholder="Masukkan berat">
                                        </div>
                                        <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label"> Kilogram</label>
                                    </div>
                                    <div class="col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
