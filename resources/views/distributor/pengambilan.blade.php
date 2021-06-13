@extends('layouts.template4')

@section('content')
{{-- table --}}
<div class="container mt-5">
    <div class="col-sm-12">
        <div class="card bg-transparent">
            <!-- Card header -->
            <div class="card-header bg-transparent border-0">
                <h3 class="mb-0">Daftar Pengambilan</h3>
            </div>

            <div class="card-body">
                <div class="table">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Nama tempat</th>
                                <th scope="col" class="sort" data-sort="status">Alamat</th>
                                @foreach($pupuks as $pupuk)
                                <th scope="col" class="sort" data-sort="budget">{{$pupuk->nama}} (Kg)</th>
                                @endforeach
                                
                            </tr>
                        </thead>
                        @foreach($lokasis as $lokasi)
                        <tbody class="list">
                            <tr>
                                <th scope="row">{{$lokasi->nama_tempat}}</th>
                                <td>
                                    <span class="status">{{$lokasi->alamat}}</span>
                                </td>
                                @foreach($pupuks as $pupuk)
                                <th scope="row">{{$distributor->pengambilan($pupuk->id,$lokasi->id)}}</th>
                                @endforeach
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