@extends('layouts.template4')

@section('content')
<div class="container mt-5">
    <h2 class="text-center"> Dashboard Distributor</h2>
    <br>
    <div class="row">
        <div class="col-sm-6">
                    <div class="card bg-transparent">
                    <!-- Card header -->
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0">Rekap Pupuk</h3>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Nama Pupuk</th>
                                                <th scope="col" class="sort" data-sort="budget">Jatah Pupuk</th>
                                                <th scope="col" class="sort" data-sort="status">Pengambilan</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <th scope="row">NPK Phonska</th>
                                                    <td> 2000 kg
                                                    </td>
                                                    <td >Pengambilan 1</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Urea</th>
                                                    <td> 1200 kg
                                                    </td>
                                                    <td >Pengambilan 2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
                {{-- table --}}
                <div class="col-sm-6">
                    <div class="card bg-transparent">
                    <!-- Card header -->
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0">Realisasi Pupuk</h3>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Nama Pupuk</th>
                                                <th scope="col" class="sort" data-sort="budget">Alokasi Pupuk</th>
                                                <th scope="col" class="sort" data-sort="status">Realisasi Pupuk</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <th scope="row">NPK Phonska</th>
                                                    <td>1200 Kg</td>
                                                    <td >1000 kg</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">SP-36</th>
                                                    <td> 2000 Kg
                                                    </td>
                                                    <td >1200 kg</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
            <div class="card bg-transparent">
                <!-- Card header -->
                <div class="card-header bg-transparent border-0">
                    <h3 class="mb-0">Rekap kebutuhan Pupuk</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Nama Pupuk</th>
                                    <th scope="col" class="sort" data-sort="kuota">kuota/10m2</th>
                                    <th scope="col" class="sort" data-sort="kebutuhan">Kebutuhan Pupuk</th>
                                </tr>
                            </thead>
                            @foreach($pupuks as $pupuk)
                            <tbody class="list">
                                <tr>
                                    <th scope="row">{{$pupuk->nama}}</th>
                                    <th scope="row">{{$pupuk->kuota_per_10m2}} kg</th>
                                    <th scope="row">
                                        {{number_format($distributor->total_luas()/10*$pupuk->kuota_per_10m2,0,",",".")}}
                                        kg</th>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- table --}}
        <div class="col-sm-6">
            <div class="card bg-transparent">
                <!-- Card header -->
                <div class="card-header bg-transparent border-0">
                    <h3 class="mb-0">Realisasi Pupuk</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Nama Pupuk</th>
                                    <th scope="col" class="sort" data-sort="budget">Pupuk Diambil</th>
                                    <th scope="col" class="sort" data-sort="status">Realisasi Pupuk</th>
                                </tr>
                            </thead>
                            @foreach($pupuks as $pupuk)
                            <tbody class="list">
                                <tr>
                                    <th scope="row">{{$pupuk->nama}}</th>
                                    <th scope="row">{{$distributor->presentase_pengambilan($pupuk->id)}} kg</th>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">{{round($distributor->presentase_pengambilan($pupuk->id)/($distributor->total_luas()/10*$pupuk->kuota_per_10m2)*100)}} %</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: {{round($distributor->presentase_pengambilan($pupuk->id)/($distributor->total_luas()/10*$pupuk->kuota_per_10m2)*100,2)}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection