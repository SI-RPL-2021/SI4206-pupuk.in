@extends('layouts.template4')

@section('content')
{{-- table --}}
<div class="container mt-5">
    <div class="col-sm-12">
        <div class="card bg-transparent">
            <!-- Card header -->
            <div class="card-header bg-transparent border-0">
                <h3 class="mb-0">Daftar Petani</h3>
            </div>
            
            <div class="card-body">
                <div class="table">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Nama Petani</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="status">Luas tanah</th>
                                <th scope="col" class="sort" data-sort="budget">Pembayaran</th>
                                <th scope="col" class="sort" data-sort="budget">Aksi</th>
                            </tr>
                        </thead>
                        @foreach($petanis as $index=>$petani)
                        <tbody class="list">
                            <tr>
                                <th scope="row">{{$petani->user->name}}</th>
                                <td>
                                    <span class="status">{{$petani->status}}</span>
                                </td>
                                <td>{{$petani->luas_tanah}} m2</td>
                                <td>Rp {{number_format($distributor->total_pembayaran($petani->id),0,",",".")}} </td>
                                <td class="text-left">
                                    <a type="button" href="{{ route('distributor.EditPetani', $petani->id) }}"
                                        class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal{{$index}}">
                                        Edit
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal{{$index}}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Luas Tanah</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post"
                                                        action="{{ route('distributor.EditPetani', $petani->id) }}"
                                                        autocomplete="off" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('patch')
                                                        <h6 class="heading-small text-muted mb-4">Petani information
                                                        </h6>
                                                        <div class="pl-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-control-label" for="input-harga">luas
                                                                    tanah</label>
                                                                <input type="number" name="luas_tanah" id="input-harga"
                                                                    class="form-control" placeholder=""
                                                                    value="{{$petani->luas_tanah ?? ''}}" required="">
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="button" class="btn btn-Warning mt-4"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-success mt-4">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if( $petani->status == 'aktif')
                                    <form method="post" action="{{route('distributor.BanPetani', $petani->id)}}">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-warning btn-sm" href="">
                                            Ban
                                        </button>
                                    </form>
                                    @else
                                    <form method="post" action="{{route('distributor.AktifPetani', $petani->id)}}">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-success btn-sm">
                                            Aktif
                                        </button>
                                    </form>
                                    @endif


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