@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add Data Petani</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.addPupuk') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Petani information</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">Alamat</label>
                                <input type="text" name="alamat" id="input-name" class="form-control" placeholder="Alamat"
                                    value="" required="" autofocus="">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">No Hp</label>
                                <input type="text" name="no_hp" id="input-harga" class="form-control"
                                    placeholder="no_telp" value="" required="">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">luas tanah</label>
                                <input type="number" name="luas_tanah" id="input-harga" class="form-control"
                                    placeholder="" value="" required="">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-harga">Distributor</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Save</button>
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