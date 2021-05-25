@extends('layouts.template3')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Lokasi Pengambilan</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('distributor.lokasi') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf 
                        <h6 class="heading-small text-muted mb-4">Tambah Lokasi</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">Nama Lokasi</label>
                                <input type="text" name="nama" id="input-name" class="form-control" placeholder="Nama"
                                    value="" required="" autofocus="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">Alamat</label>
                                <input type="text" name="alamat" id="input-name" class="form-control" placeholder="Alamat"
                                    value="" required="" autofocus="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Save</button>
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