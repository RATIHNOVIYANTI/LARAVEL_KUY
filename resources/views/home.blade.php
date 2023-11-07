<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{ 'image/POLBENG.png' }}" alt="Logo" width="80px" class="ms-5">
            <div class="d-flex">
                <p class="fs-4 me-5">D4 RPL Politeknik Negeri Bengkalis</p>
            </div>
        </div>
    </nav>

    <div class="z-n1 position-absolute"><img src="{{ 'image/background.jpg' }}" alt="bg" width="1365"
            height="550px"></div>

    <div class="container" style="margin-top: 180px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-black">Selamat Datang!</h1>
                <h4 class="text-black">
                    Di Perpustakaan Negeri Bengkalis
                </h4>
                <h6 class="mt-3">
                    Silahkan
                    <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a>
                    atau <a href="{{ route('auth.register') }}" style="text-decoration: none;">daftar</a>
                    jika anda belum punya akun
                </h6>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
