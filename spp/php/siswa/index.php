<?php
require_once('functions.php');
//ambil data/query data dari tabel siswa
$siswa = query("SELECT * FROM siswa");
$kelas = query("SELECT * FROM kelas");
$spp = query("SELECT * FROM spp");

?>


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

    <div class="row mt-5">
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-user-plus m-2"></i>TAMBAH DATA SISWA
            </button>

            <table class="table table-bordered table-striped mt-3 align-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NISN</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">No.Telp</th>
                        <th scope="col">SPP</th>
                        <th scope="col" colspan="3" style="text-align: center;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $row) : ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?= $row['nisn']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php foreach ($kelas as $kls) {
                                    if ($row['id_kelas'] == $kls['id_kelas']) {
                                        echo $kls['nama_kelas'];
                                    }
                                } ?></td>
                            <td><?php echo $row['no_telp']; ?></td>
                            <td><?php foreach ($spp as $harga) {
                                    if ($row['id_spp'] == $harga['id_spp']) {
                                        echo $harga['nominal'];
                                    }
                                } ?></td>
                            <td style="text-align: center;"><button type="button" class="btn btn-info">Detail</button></td>
                            <td style="text-align: center;"><i class="fas fa-user-edit bg-success p-2 text-white rounded"></i></td>
                            <td style="text-align: center;"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="tambah.php" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NISN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan NISN">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NIS</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan NIS">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NAMA</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">KELAS</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kelas</option>
                                <option value="1">X-RPL A</option>
                                <option value="2">X-RpL B</option>
                                <option value="3">XI-RPL A</option>
                                <option value="3">XI-RPL B</option>
                                <option value="3">XII-RPL</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No.Telp</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan No.Telp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">SPP</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih SPP</option>
                                <option value="1">Rp 50.000,00</option>
                                <option value="2">Rp 100.000,00</option>
                                <option value="3">Rp 150.000,00</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
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
