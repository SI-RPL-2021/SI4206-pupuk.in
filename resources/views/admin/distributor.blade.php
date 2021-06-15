@extends('layouts.template3')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
<div class="container mt-6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Distributor</h3>
                    <p class="text-sm mb-0">
                        Data seluruh petani yang menggunakan sistem Petani.in
                    </p>
                </div>
                <div class="table-responsive py-4">
                    <div class="table-responsive">
                        <table class="table align-items-center dataTable table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nama">Nama</th>
                                    <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                                    <th scope="col" class="sort" data-sort="luas petani">Jumlah Petani</th>
                                    <th scope="col" class="sort" data-sort="luas tanah">Luas tanah</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($distributors as $distributor)
                                <tr>
                                    <td>{{$distributor->user->name}}</td>
                                    <td>{{$distributor->alamat}}</td>
                                    <td>{{$distributor->jumlah_petani($distributor->id)}}</td>
                                    <td>{{$distributor->luas($distributor->id)}} m2</td>
                                    <td>
                                        @if( $distributor->status == 'aktif')
                                        <form method="post" action="{{route('admin.BanDistributor', $distributor->id)}}">
                                            @csrf
                                            @method('patch')
                                            <button type="submit" class="btn btn-warning btn-sm" href="">
                                                Ban
                                            </button>
                                        </form>
                                        @else
                                        <form method="post" action="{{route('admin.AktifDistributor', $distributor->id)}}">
                                            @csrf
                                            @method('patch')
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Aktif
                                            </button>
                                        </form>
                                        @endif
                                    </td>
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
@endsection
@push('js')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('.dataTable').DataTable({
        'language': {
            'paginate': {
                'previous': '<',
                'next': '>'
            }
        }
    });
});
</script>
@endpush