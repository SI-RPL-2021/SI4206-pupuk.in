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
                                                <th scope="col" class="sort" data-sort="name">Nama Petani</th>
                                                <th scope="col" class="sort" data-sort="status">Nama Pupuk</th>
                                                <th scope="col" class="sort" data-sort="budget">Jatah Pupuk</th>
                                            </tr>
                                        </thead>
                                        @foreach($petanis as $petani)
                                        <tbody class="list">
                                            <tr>
                                                <th scope="row">{{$petani->user->name}}</th>
                                                    <td>
                                                        <span class="badge badge-dot mr-4">
                                                            <i class="bg-primary"></i>
                                                            <span class="status">Aktif</span>
                                                        </span>
                                                    </td>
                                                    <td >Rp 20,000</td>
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
                                                <th scope="col" class="sort" data-sort="budget">Alokasi Pupuk</th>
                                                <th scope="col" class="sort" data-sort="status">Realisasi Pupuk</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <th scope="row">Tuyia Huma</th>
                                                    <td>
                                                        <span class="badge badge-dot mr-4">
                                                            <i class="bg-primary"></i>
                                                            <span class="status">Aktif</span>
                                                        </span>
                                                    </td>
                                                    <td >Rp 20,000</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tuyia Huma</th>
                                                    <td>
                                                        <span class="badge badge-dot mr-4">
                                                            <i class="bg-danger"></i>
                                                            <span class="status">Tidak Aktif</span>
                                                        </span>
                                                    </td>
                                                    <td >Rp 20,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
</div>
@endsection