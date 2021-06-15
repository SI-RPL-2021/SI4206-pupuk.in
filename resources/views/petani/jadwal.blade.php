@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Jadwal Pengambilan pupuk</h1>
    <br>
    <table class="table table-striped">
        <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Pengambilan</th>
        <th scope="col">Lokasi Pengambilan</th>
        <th scope="col">Jumlah Pengambilan</th>
    </tr>
        </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Tata Sonya</td>
        <td>12 April 2020</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">1</th>
        <td>Tata Sonya</td>
        <td>12 April 2020</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">1</th>
        <td>Tata Sonya</td>
        <td>12 April 2020</td>
        <td>@mdo</td>
    </tr>
    </tbody>
</table>
</div>
@endsection