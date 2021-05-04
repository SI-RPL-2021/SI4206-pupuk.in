@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <img src=""{{asset('/img/p_phonska.jpg')}}" width="100%" height="100%" style="display: block; margin: auto;">
            </div>
        </div>
        <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center">Form Pengambilan Pupuk</h1>
                    <div class="container">
                        <form class="mt-4">
                            <div class="form-group row">
                                <div class="col ml-4">
                                    <label class="col-form-label">Nama Pupuk</label>
                                </div>
                                <div class="col-6 mr-5">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col ml-4">
                                    <label class="col-form-label">Jatah Tahunan</label>
                                </div>
                                <div class="col-6 mr-5">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col ml-4">
                                    <label class="col-form-label">Periode Pengambilan</label>
                                </div>
                                <div class="col-6 mr-5">
                                    <select id="inputState" class="form-control">
                                        <option selected></option>
                                        <option>Pengambilan 1</option>
                                        <option>Pengambilan 2</option>
                                        <option>Pengambilan 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col ml-2">
                                    <button type="submit" class="btn btn-primary btn-block">Ambil</button>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection