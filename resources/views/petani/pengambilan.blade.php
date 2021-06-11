
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Form Pengambilan Pupuk</h3>
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
                                <label class="form-control-label" for="input-harga">Jatah Tahunan</label>
                                <input type="number" name="harga" id="input-harga" class="form-control"
                                    placeholder="Harga" value="" required="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Lokasi Pengambilan</label>
                                <select id="role" name="role" class="form-control @error('role') is-invalid @enderror"
                                    name="email" value="{{ old('role') }}" required autocomplete="role">
                                    <option value="2"></option>
                                    <option value="3"></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Periode Pengambilan</label>
                                <select id="role" name="role" class="form-control @error('role') is-invalid @enderror"
                                    name="email" value="{{ old('role') }}" required autocomplete="role">
                                    <option value="1"></option>
                                    <option value="2">Pengambilan 1</option>
                                    <option value="3">Pengambilan 2</option>
                                    <option value="3">Pengambilan 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Total Pembayaran </label>
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

@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="row pt-3">
        @foreach($pupuks as $pupuk)
        <div class="col-md-3 mt-3">
            <div class="card h-100" style="">
                <div class="card-block stretched-link text-decoration-none">
                    <img class="card-img-top" src="/img/photo/{{$pupuk->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $pupuk->nama}}</h4>
                        <p class="card-text text-center">Harga : RP {{number_format($pupuk->harga,0,",",".")}} per KG
                        </p>
                        <p class="text-center"> Kuota
                            {{number_format($petani->luas_tanah/10*$pupuk->kuota_per_10m2,0,",",".")}} Kg
                        </p>
                        <p class="text-center">Pengambilan : {{$petani->total_pengambilan($pupuk->id)}} kg
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="" aria-valuemin="0"
                                aria-valuemax="100" style="width: {{$petani->total_pengambilan($pupuk->id)/($petani->luas_tanah/10*$pupuk->kuota_per_10m2)*100}}%;"></div>
                        </div>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <h4 class="card-text text-center"><a type="button" href="/petani/formPengambilan/{{$pupuk->id}}"
                                class="btn btn-primary">Ambil</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

