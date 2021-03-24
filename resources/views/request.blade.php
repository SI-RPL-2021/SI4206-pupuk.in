<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style>
        body {
            background-image: url(img/bgLanding.png);
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e08391607d.js" crossorigin="anonymous"></script>
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <!-- foto -->
                    <div class="container mt-5 ">
                        <img src="img/logokotak.png" width="70%" height="70%" style="display: block; margin: auto;">
                    </div>
                </div>
            </div>
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title text-center">Request</h5>
                    <!-- form -->
                    <div class="container">
                        <form class="mt-4">
                            <div class="form-group row">
                                <div class="col ml-4">
                                    <label class="col-form-label">Nama  petani</label>
                                </div>
                                <div class="col-6 mr-5">
                                    <input type="text" class="form-control" placeholder="Masukan nama">
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col ml-4">
                                    <label class="col-form-label">No HP</label>
                                </div>
                                <div class="col-6 mr-5">
                                    <input type="number" class="form-control" placeholder="Masukan Nomor">
                                </div>
                            </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col ml-4">
                                    <label class="col-form-label">Alamat</label>
                                </div>
                                <div class="col-6 mr-5">
                                    <textarea name="alamat" class="form-control"
                                        placeholder="Masukan Alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col ml-4">
                                    <label class="col-form-label">Requestan</label>
                                </div>
                                <div class="col-6 mr-5">
                                    <select id="inputState" class="form-control">
                                        <option selected></option>
                                        <option>Penambahan pupuk</option>
                                        <option>Pengambilan tempat pupuk</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col ml-2">
                                    <button type="submit" class="btn btn-primary btn-block">Request</button>
                                </div>
                            </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                    crossorigin="anonymous"></script>
</body>

</html>