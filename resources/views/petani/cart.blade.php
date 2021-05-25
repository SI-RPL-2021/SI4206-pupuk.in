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
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light text-center">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Pupuk</th>
                                <th scope="col">Berat Pupuk</th>
                                <th scope="col" class="sort" data-sort="budget">Total Pembayaran</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col"> Aksi </th>
                            </tr>
                        </thead>

                        <tbody class="list text-center">
                            @foreach ($carts as $cart)
                            <tr>
                                <th scope="row">
                                    {{$cart->pupuk->nama}}
                                </th>
                                <th scope="row">
                                    {{number_format($cart->jumlah_pengambilan,0,",",".")}} Kg
                                </th>
                                <td class="budget">
                                    Rp {{number_format($cart->jumlah_pembayaran,0,",",".")}}
                                </td>
                                <td>
                                    <span class="status">
                                        {{$cart->status}}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <h4 class="card-text text-center"><a type="button"
                                            href="{{route('petani.bayar',$cart->id)}}"
                                            class="btn btn-primary">Bayar</a>
                                    </h4>
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

@endsection