@extends('layouts.template')

@section('content')

<div class="container mt-5">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-info"></i></span>
        <span class="alert-text"><strong>Perhatian!</strong> Pengambilan pupuk tinggal {{ $pupuk->daysLeft()}} hari lagi !!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
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
                                aria-valuemax="100"
                                style="width: {{$petani->total_pengambilan($pupuk->id)/($petani->luas_tanah/10*$pupuk->kuota_per_10m2)*100}}%;">
                            </div>
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