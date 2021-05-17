@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="card">
            <h1 class="card-header bg-primary text-white text-center">Pembayaran</h1>
        <div class="card-body">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Payment Method</h3>
                        
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-harga">ATM/Transfer Bank</label>
                                    <br>
                                    <div class="text-left">
                                    <img src="{{asset('img/mandiri.png')}}" alt="Logo" width="40" height="20">
                                    <img src="{{asset('img/bca.jpg')}}" alt="Logo" width="40" height="20">
                                    <img src="{{asset('img/bri.png')}}" alt="Logo" width="40" height="20">
                                    <img src="{{asset('img/bni.jpg')}}" alt="Logo" width="40" height="20">
                                    </div>
                                    <br>
                                    <select id="role" name="role" class="form-control @error('role') is-invalid @enderror"
                                        name="email" value="{{ old('role') }}" required autocomplete="role">
                                        <option value="1"></option>
                                        <option value="2">Mandiri</option>
                                        <option value="3">BCA</option>
                                        <option value="4">BRI</option>
                                        <option value="5">BNI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-harga">Credit/Debit Card</label>
                                    <br>
                                    <div class="text-left">
                                    <img src="{{asset('img/visa.png')}}" alt="Logo" width="40" height="20">
                                    <img src="{{asset('img/master.png')}}" alt="Logo" width="40" height="20">
                                    </div>
                                    <br>
                                    <select id="role" name="role" class="form-control @error('role') is-invalid @enderror"
                                        name="email" value="{{ old('role') }}" required autocomplete="role">
                                        <option value="1"></option>
                                        <option value="2">Mandiri</option>
                                        <option value="3">BCA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-harga">Pembayaran Lain</label>
                                    <br>
                                    <div class="text-left">
                                    <img src="{{asset('img/alfa.png')}}" alt="Logo" width="40" height="20">
                                    <img src="{{asset('img/indomart.jpg')}}" alt="Logo" width="40" height="20">
                                    <img src="{{asset('img/gopay.jpg')}}" alt="Logo" width="40" height="20">
                                    </div>
                                    <br>
                                    <select id="role" name="role" class="form-control @error('role') is-invalid @enderror"
                                        name="email" value="{{ old('role') }}" required autocomplete="role">
                                        <option value="1"></option>
                                        <option value="2">Alfamart</option>
                                        <option value="3">Indomart</option>
                                        <option value="3">Go-Pay</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="#" class="btn btn-primary">Bayar</a>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/p_urea.jpg')}}" width="100" height="120" alt="...">
                            </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>Urea</b></h3>
                                        <h5 class="card-text">Rp.00000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/p_za.jpg')}}" width="100" height="120"alt="...">
                            </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>ZA</b></h3>
                                        <h5 class="card-text">Rp.00000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/p_za.jpg')}}" width="100" height="120"alt="...">
                            </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>ZA</b></h3>
                                        <h5 class="card-text">Rp.00000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/p_za.jpg')}}" width="100" height="120"alt="...">
                            </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>ZA</b></h3>
                                        <h5 class="card-text">Rp.00000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3><b>Sub Total</b><h3>
                        <h3><b>Biaya Lainnya</b><h3>
                        <hr>
                        <h3><b>Total Pembayaran</b><h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection