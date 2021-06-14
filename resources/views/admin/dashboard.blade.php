@extends('layouts.template3')

@section('content')

<div class ="container mt-5">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah distributor</h5>
                            <span class="h2 font-weight-bold mb-0">{{$distributor}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                <i class="ni ni-delivery-fast"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah 
                                <br>Petani</h5>
                            <span class="h2 font-weight-bold mb-0">{{$petani}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                <i class="ni ni-single-02"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Pupuk Yang Diambil (Kg)</h5>
                            <span class="h2 font-weight-bold mb-0">{{number_format($pengambilan,0,",",".")}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                <i class="ni ni-chart-bar-32"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Pembayaran (Rp)</h5>
                                <span class="h2 font-weight-bold mb-0">{{number_format($pembayaran,0,",",".")}}</span>
                            </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                <i> Rp </i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="h3 mb-0">Distributor</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="chart-bars" class="chart-canvas chartjs-render-monitor" width="278" height="350" style="display: block; width: 278px; height: 350px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- table --}}
                <div class="col-sm-6">
                    <div class="card bg-transparent">
                    <!-- Card header -->
                            <div class="card-header bg-transparent border-0">
                                <h3 class="mb-0">Pupuk</h3>
                            </div>
                        <div class="card-body">
                            <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Nama Pupuk</th>
                                    <th scope="col" class="sort" data-sort="budget">Pengambilan</th>
                                    <th scope="col" class="sort" data-sort="status">Total Prembayaran</th>
                                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                                </tr>
                            </thead>
                                <tbody class="list">
                                @foreach($pupuks as $pupuk)
                                    <tr>
                                        <th scope="row">{{ $pupuk->nama }}</th>
                                        <td >{{$pupuk->pengambilan($pupuk->id)}} Kg</td>
                                        <td >Rp {{number_format($pupuk->pembayaran($pupuk->id),0,",",".")}} </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection