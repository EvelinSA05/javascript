<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="js/app.js" defer></script>
    <title>Ajax-Jquery Bootstrap PHP</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4 text-center">
            <h1>Belajar Ajax Jquery Bootstrap PHP</h1>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="row">
                    <h2>Input Data Pelanggan</h2>
                </div>
                <div class="row mt-4">
                    <div id="msg">
                    </div>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="id" required aria-describedby="emailHelp">
                            <label for="exampleInputEmail1" class="form-label">Pelanggan</label>
                            <input type="text" required class="form-control" id="pelanggan" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Harus di Isi</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" required>
                            <div id="emailHelp" class="form-text">Harus di Isi</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Telp</label>
                            <input type="text" class="form-control" id="telp" required>
                            <div id="emailHelp" class="form-text">Harus di Isi</div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="row ms-4">
                    <h2>Data Pelanggan</h2>
                </div>
                <div class="row mt-4 ms-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody id="isidata">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>