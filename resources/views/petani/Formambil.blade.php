@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Pengambilan Pupuk</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('petani.pengambilan')}}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Form</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">Nama Pupuk</label>
                                <select class="form-control" name="nama" id="exampleFormControlSelect1">
                                    <!-- <option value="" selected disabled>Pilih Pupuk</option> -->
                                    <option value="{{ $pupuk->id }}"> {{ $pupuk->nama }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Jumlah</label>
                                <input type="number" name="jumlah" id="input-harga" class="form-control"
                                    placeholder="Jumlah" value="" required="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Lokasi Pengambilan</label>
                                <select class="form-control" name="tempat" id="exampleFormControlSelect1">
                                    <option value="" selected disabled>Pilih Lokasi Pengambilan</option>
                                    @foreach($lokasis as $lokasi)
                                    <option value="{{$lokasi->id}}"> {{ $lokasi->nama_tempat }}-{{$lokasi->alamat}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Lanjut</button>
                            </div>
                        </div>
                    </form>
                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection