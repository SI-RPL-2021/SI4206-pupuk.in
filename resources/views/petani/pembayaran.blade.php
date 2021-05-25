@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="card">
        <h1 class="card-header bg-primary text-white text-center">Pembayaran</h1>
        <div class="card-body">
            <div class="card-group">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <div class="card-body">
                                    <form action="{{route('petani.pembayaran',$bayar->id)}}" methode="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            @csrf
                                            @method('patch')
                                            <label class="form-control-label" for="input-harga">Metode
                                                Pembayaran</label>
                                            <br>
                                            <div class="text-left">
                                                <img src="{{asset('img/mandiri.png')}}" alt="Logo" width="40"
                                                    height="20">
                                                <img src="{{asset('img/bca.jpg')}}" alt="Logo" width="40" height="20">
                                                <img src="{{asset('img/bri.png')}}" alt="Logo" width="40" height="20">
                                                <img src="{{asset('img/bni.jpg')}}" alt="Logo" width="40" height="20">
                                                <img src="{{asset('img/visa.png')}}" alt="Logo" width="40" height="20">
                                                <img src="{{asset('img/master.png')}}" alt="Logo" width="40"
                                                    height="20">
                                                <img src="{{asset('img/alfa.png')}}" alt="Logo" width="40" height="20">
                                                <img src="{{asset('img/indomart.jpg')}}" alt="Logo" width="40"
                                                    height="20">
                                                <img src="{{asset('img/gopay.jpg')}}" alt="Logo" width="40" height="20">
                                            </div>
                                            <br>
                                            <select class="form-control" name="metode" id="exampleFormControlSelect1" value="{{$bayar->metode}}">
                                                <option value="" selected disabled>Pilih metode pembayaran</option>
                                                <option value="Mandiri">Mandiri</option>
                                                <option value="BCA">BCA</option>
                                                <option value="BRI">BRI</option>
                                                <option value="BNI">BNI</option>
                                                <option value="Alfamart">Alfamart</option>
                                                <option value="Indomart">Indomart</option>
                                                <option value="Go-Pay">Go-Pay</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-grid gap-2">
                                            <button type="submit" name="submit" class="btn btn-primary mt-4">Bayar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <div class="card mb-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="/img/photo/{{$bayar->pupuk->gambar}}" width="100"
                                                            height="120" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h3 class="card-title"><b>{{$bayar->pupuk->nama}}</b>
                                                            </h3>
                                                            <h5 class="card-text">
                                                                {{number_format($bayar->jumlah_pengambilan,0,",",".")}}
                                                                Kg
                                                            </h5>
                                                            <h5 class="card-text"> Rp
                                                                {{number_format($bayar->jumlah_pembayaran,0,",",".")}}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection