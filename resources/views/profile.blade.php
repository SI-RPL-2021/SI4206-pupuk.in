@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit Profile</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">User information</h6>


                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">Name</label>
                                <input type="text" name="name" id="input-name" class="form-control" placeholder="Name"
                                    value="{{ $user->name}}" required="" autofocus="">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email</label>
                                <input type="email" name="email" id="input-email" class="form-control"
                                    placeholder="Email" value="{{ $user->email}}" required="">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Profile photo</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="input-picture">Select profile photo</label>
                                    <input type="file" name="photo" class="custom-file-input" id="input-picture">
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Save</button>
                            </div>
                        </div>
                    </form>

                    <hr class="my-4">

                    <form method="post" action="{{ route('profile.changePass') }}" enctype="multipart/form-data"
                        autocomplete="off">

                        @csrf 

                        <h6 class="heading-small text-muted mb-4">Password</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-current-password">Current Password</label>
                                <input type="password" name="old_password" id="input-current-password"
                                    class="form-control" placeholder="Current Password" value="" required="">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password">New Password</label>
                                <input type="password" name="new_password" id="input-password" class="form-control"
                                    placeholder="New Password" value="" required="">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">Confirm New
                                    Password</label>
                                <input type="password" name="password_confirmation" id="input-password-confirmation"
                                    class="form-control" placeholder="Confirm New Password" value="" required="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">Change password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection