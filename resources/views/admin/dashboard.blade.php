@extends('layouts.template3')

@section('content')

<div class="container mt-5">
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
                                <br>Petani
                            </h5>
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
                                <h5 class="h3 mb-0">User</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas chartjs-render-monitor" width="300" height="180"></canvas>
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
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach($pupuks as $pupuk)
                                    <tr>
                                        <th scope="row">{{ $pupuk->nama }}</th>
                                        <td>{{$pupuk->pengambilan($pupuk->id)}} Kg</td>
                                        <td>Rp {{number_format($pupuk->pembayaran($pupuk->id),0,",",".")}} </td>
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
@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
   var parent_graph = document.getElementById('chart-bars').getContext('2d');
    var myChart = new Chart(parent_graph, {
        type: 'bar',
        data: {
            labels: ['Distributor','Petani'],
            datasets: [{
                label: 'User',
                data: [{{$distributor}},{{$petani}}],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush