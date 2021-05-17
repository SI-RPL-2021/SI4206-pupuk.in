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
                        <p class="card-text text-center">Harga : RP {{$pupuk->harga}} per KG</p>
                            <ul> Kuota yang dimiliki 
                            {{$petani->luas_tanah/10*$pupuk->kuota_per_10m2}}
                            </ul>
                            <ul>Progres Pengambilan
                                <li></li>
                            </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <h4 class="card-text text-center"><button type="button" class="btn btn-primary">Ambil</button>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection