@extends('layouts.template3')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Rekap Pupuk</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="" autocomplete="off"
                        enctype="multipart/form-data">
                        <h6 class="heading-small text-muted mb-4">Pupuk information</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">Nama Pupuk</label>
                                <input type="text" name="nama" id="input-name" class="form-control" placeholder="Name"
                                    value="" required="" autofocus="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Tahun</label>
                                <input type="number" name="harga" id="input-harga" class="form-control"
                                    placeholder="Harga" value="" required="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Jumlah Pupuk</label>
                                <input type="number" name="harga" id="input-harga" class="form-control"
                                    placeholder="Harga" value="" required="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Lanjut</button>
                            </div>
                        </div>
                    </form>

                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
