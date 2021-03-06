@extends('layouts.template3')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add Pupuk</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.addPupuk') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Pupuk information</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">Nama</label>
                                <input type="text" name="nama" id="input-name" class="form-control" placeholder="Name"
                                    value="" required="" autofocus="">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Harga per kilo</label>
                                <input type="number" name="harga" id="input-harga" class="form-control"
                                    placeholder="Harga" value="" required="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Kuota/10 m2</label>
                                <input type="number" name="kuota_per_10m2" id="input-harga" class="form-control"
                                    placeholder="Kuota" value="" required="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Batas Waktu</label>
                                <input class="form-control" name="date"type="date" value="" id="example-date-input" placeholder="Batas waktu">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Gambar Pupuk</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="input-picture">Pilih Gambar</label>
                                    <input type="file" name="gambar" class="custom-file-input" id="input-picture">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection