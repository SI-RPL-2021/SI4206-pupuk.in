@extends('layouts.template')
@section('content')

@if( $petani->status == 'aktif')
<div class="container mt-5">
<div class="main-content">
    <div class="header bg-gradient-success py-7 py-lg-6 pt-lg-8 mb-3">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Pupuk.in</h1>
                        <p class="text-lead text-white">Bertani dengan bijak agar tetap mewariskan tanah subur pada
                            generasi berikutnya.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-3 mt-3">
                <div class="card h-100" style="">
                    <a class="card-block stretched-link text-decoration-none" href="">
                        <img class="card-img-top" src="{{asset('img/p_phonska.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">NPK Phonska</h4>
                            <p class="card-text text-center">Pupuk majemuk lengkap bermutu</p>
                            <ul> Kandungan
                                <li> N (Nitrogen) : 15%</li>
                                <li>P2O5 (Fosfat) : 15%</li>
                                <li> K (Kalium) : 15%</li>
                                <li> S (Sulfur) : 10%</li>
                            </ul>
                            <ul>Spesifikasi
                                <li> Bentuk granul</li>
                                <li> Larut dalam air</li>
                                <li> Warna merah muda</li>
                                <li>Kemasan 50kg</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <h4 class="card-text"></h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card h-100" style="">
                    <a class="card-block stretched-link text-decoration-none" href="">
                        <img class="card-img-top" src="{{asset('img/p_sp.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">SP-36</h4>
                            <p class="card-text text-center">Pupuk tunggal dari batuan fosfat yang ditambang </p>
                            <ul> Kandungan
                                <li>P2O5 (Fosfat) : 36% </li>
                                <li>Air : 5% </li>
                                <li>H3PO4 : 6% </li>
                                <br>
                            </ul>
                            <ul>Spesifikasi
                                <li> Bentuk butiran</li>
                                <li> Larut dalam air</li>
                                <li> Warna abu-abu</li>
                                <li> Kemasan 50kg</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <h4 class="card-text"></h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card h-100" style="">
                    <a class="card-block stretched-link text-decoration-none" href="">
                        <img class="card-img-top" src="{{asset('img/p_urea.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">Urea</h4>
                            <p class="card-text text-center">Pupuk yang mengandung nitrogen (N) berkadar tinggi </p>
                            <ul> Kandungan
                                <li>Air : 0,50%</li>
                                <li>Biuret : 1%</li>
                                <li>Nitrogen : 46%</li>
                                <br>
                            </ul>
                            <ul>Spesifikasi
                                <li> Bentuk butiran</li>
                                <li> Larut dalam air</li>
                                <li> Warna merah muda</li>
                                <li> Kemasan 50kg</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <h4 class="card-text"></h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card h-100" style="">
                    <a class="card-block stretched-link text-decoration-none" href="">
                        <img class="card-img-top" src="{{asset('img/p_za.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">ZA</h4>
                            <p class="card-text text-center">Pupuk yang mengandung amonium sulfat </p>
                            <ul>Kandungan
                                <li>Nitrogen : 20,8%</li>
                                <li>Belerang : 23,8%</li>
                                <li>H2SO4 : 0.1% </li>
                                <li>Air : 1% </li>
                            </ul>
                            <ul>Spesifikasi
                                <li> Bentuk kristal</li>
                                <li> Larut dalam air</li>
                                <li> Warna putih</li>
                                <li> Kemasan 50kg</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <h4 class="card-text"></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@else
<div class="card bg-dark text-white border-0">
    <img class="card-img" src="{{asset('img/jumb-3.jpg')}}" alt="Card image">
    <div class="card-img-overlay d-flex align-items-center">
        <div>
            <h5 class="h2 card-title text-red mb-2"><b>Terindikasi !</b></h5>
            <p class="card-text">Akun anda telan di BAN karena terindikasi melakukan PELANGGARAN</p>
            <p class="card-text text-sm font-weight-bold">Segera Hubungi atau datang ke Tempat distributor Anda</p>
        </div>
    </div>
</div>
@endif
@endsection