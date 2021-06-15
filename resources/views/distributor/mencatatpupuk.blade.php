@extends('layouts.template3')

@section('content')
<div class="card" style="width: 50rem;">
  <div class="card-body">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jatah Tahunan</th>
      <th scope="col">Sesi pengambilan</th>
      <th scope="col">Jumlah yg belum dibayar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Markus</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp. 112.500</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Joko</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp22.500 </td>
    </tr>
    <tr>
     <th scope="row">3</th>
      <td>Lubis</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp67.500</td>
    </tr>
    <tr>
     <th scope="row">4</th>
      <td>Dimas</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp45.000</td>
    </tr>
    <tr>
     <th scope="row">5</th>
      <td>Rizky</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp67.500</td>
    </tr>
  </tbody>
</table>
</div>
</div>

@endsection