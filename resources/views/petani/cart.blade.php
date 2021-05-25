@extends('layouts.template')

@section('content')
<div class="container mt-6">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Keranjang Pupuk</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive" data-toggle="list"
                    data-list-values='["name", "budget", "status", "completion"]'>
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Pupuk</th>
                                <th scope="col" class="sort" data-sort="budget">Total Pembayaran</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="completion">Completion</th>
                                <th scope="col"> Aksi </th>
                            </tr>
                        </thead>
                        @foreach ($carts as $cart)
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    {{$cart->pupuk->nama}}
                                </th>
                                <td class="budget">
                                    Rp {{number_format($cart->jumlah_pembayaran,0,",",".")}} 
                                </td>
                                <td>
                                    <span class="status">pending</span>
                                </td>
                                <td>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
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