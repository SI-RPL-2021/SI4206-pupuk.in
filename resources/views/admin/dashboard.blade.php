@extends('layouts.template4')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8"> -->
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Distributor</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Nama</th>
                                    <th scope="col" class="sort" data-sort="status">Email</th>
                                    <th scope="col" class="sort" data-sort="status">Alamat</th>
                                    <th scope="col" class="sort" data-sort="status">No_Hp</th>
                                    <th scope="col" class="sort" data-sort="status">Penyaluran</th>
                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                    <th scope="col" class="sort" data-sort="status"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    @foreach($distributors as $distributor)
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="" src="{{asset('/img/photo/$distributor->user->photo')}}">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{ $distributor->user->name }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        {{ $distributor->user->email }}
                                    </td>
                                    <td>
                                        <!-- alamat -->
                                        {{ $distributor->alamat }}
                                    </td>
                                    <td>
                                        {{ $distributor->no_telp }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i>
                                            <span class="status">{{ $distributor->status }}</span>
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection