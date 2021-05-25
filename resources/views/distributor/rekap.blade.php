@extends('layouts.template3')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama</th>
      <th scope="col">Status</th>
      <th scope="col">Jatah Tahunan</th>
      <th scope="col">Sesi pengambilan</th>
      <th scope="col">Jumlah yg belum dibayar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>03/03/2021</td>
      <td>Markus</td>
      <td>Aktif</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp. 112.500</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>22/03/2021</td>
      <td>Joko</td>
      <td>Aktif</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp22.500 </td>
    </tr>
    <tr>
     <th scope="row">3</th>
      <td>17/01/2021</td>
      <td>Lubis</td>
      <td>Aktif</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp67.500</td>
    </tr>
    <tr>
     <th scope="row">4</th>
      <td>04/04/2021</td>
      <td>Dimas</td>
      <td>Aktif</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp45.000</td>
    </tr>
    <tr>
     <th scope="row">5</th>
      <td>23/04/2021</td>
      <td>Rizky</td>
      <td>Aktif</td>
      <td>50 kg</td>
      <td>3 x</td>
      <td>Rp67.500</td>
    </tr>
  </tbody>
</table>

@endsection