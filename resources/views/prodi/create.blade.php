<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prodi</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                <h2>Form Prodi</h2>
                <form action="http://127.0.0.1:8000/prodi/store" method="post">
                @csrf
                <div class="form-group"></div>
                    <input type="hidden" name="_token" value="Qi5kFmEnEpDcTFgwArz2PEP2FW2f6IJK4kXm8e3N">
                        <label for="nama">Nama</label>
                        <input type="text" nama="nama" id="nama" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>