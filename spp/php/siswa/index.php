<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>SPP | Siswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SPP | <b>SMK NEGERI 2 KAIMANA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="#">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-2 bg-dark pt-4 pb-5">
            <ul class="nav flex-column mr-4 mb-5">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="../index.php"><i class="fas fa-tachometer-alt m-2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#"><i class="fas fa-users m-2"></i>Daftar Siswa</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-user-tie m-2"></i>Daftar Petugas</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-house-user m-2"></i>Daftar Kelas</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-money-check-alt m-2"></i>Daftar SPP</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-keyboard m-2"></i>Entri Pembayaran</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-history m-2"></i>History Pembayaran</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="far fa-file-alt m-2"></i>Laporan</a>
                    <hr class="bg-secondary">
                </li>

            </ul>
        </div>

        <div class="col-md-10 p-5">
            <h3><i class="fas fa-users m-2"></i>DAFTAR SISWA</h3>
            <hr>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NISN</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">No.Telp</th>
                        <th scope="col">SPP</th>
                        <th scope="col" colspan="3">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>00123456</td>
                        <td>NAMA CODING</td>
                        <td>X-RPL A</td>
                        <td>0812-1077-9665</td>
                        <td>Rp. 50.000,00</td>
                        <td><button type="button" class="btn btn-info">Detail</button></td>
                        <td><i class="fas fa-user-edit bg-success p-2 text-white rounded"></i></td>
                        <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
