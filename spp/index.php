<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
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
                        <a class="nav-link text-white" href="#">Logut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pt-4">
            <ul class="nav flex-column mr-4 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt m-2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="siswa/index.php"><i class="fas fa-users m-2"></i>Daftar Siswa</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-tie m-2"></i>Daftar Petugas</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-house-user m-2"></i>Daftar Kelas</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-money-check-alt m-2"></i>Daftar SPP</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-keyboard m-2"></i>Entri Pembayaran</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-history m-2"></i>History Pembayaran</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-file m-2"></i>Laporan</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>

        <!-- bagian isi -->
        <div class="col-md-10 p-5">
            <h3><i class="fas fa-tachometer-alt m-2"></i>DASHBOARD</h3>
            <hr>

            <div class="row text-white">
                <div class="card bg-info m-3" style="width:17rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-users m-2"></i>
                        </div>
                        <h5 class="card-title">JUMLAH SISWA</h5>
                        <div class="display-4">599</div>
                        <a class="card-link" href="">
                            <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
                <div class="card bg-success m-3" style="width:17rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-user-tie m-2"></i>
                        </div>
                        <h5 class="card-title">JUMLAH PETUGAS</h5>
                        <div class="display-4">50</div>
                        <a class="card-link" href="">
                            <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
                <div class="card bg-warning m-3" style="width:17rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-house-user m-2"></i>
                        </div>
                        <h5 class="card-title">JUMLAH KELAS</h5>
                        <div class="display-4">23</div>
                        <a class="card-link" href="">
                            <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
                <div class="card bg-danger m-3" style="width:16.8rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-money-check-alt m-2"></i>
                        </div>
                        <h5 class="card-title">DAFTAR SPP</h5>
                        <div class="display-4">10</div>
                        <a class="card-link" href="">
                            <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
