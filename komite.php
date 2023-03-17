<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- style.css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <title>SMK N2 Kaimana |Komite</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <!-- button offcanvas -->
      <button class="navbar-toggler btn btn-secondary bg-dark me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- button offcanvas -->
      <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">smk n2 kaimana</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="profil.html">Profile</a></li>
              <li><a class="dropdown-item" href="#">Setting</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="login.html"><i class="fa-solid fa-arrow-right-from-bracket"></i> LogOut</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body text-white py-0 px-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li class="">
            <a class="nav-link text-white py-4 px-3 bg-info" href="index.php">
              <span class="fs-3 me-3"><i class="fa-solid fa-gauge-high"></i></span>
              <span class="fs-4 fw-bold">Dashboard</span>
            </a>
            <hr class="bg-sendary my-0">
          </li>
          <li class="">
            <a class="nav-link py-4 px-3" href="siswa.php">
              <span class="fs-4 me-3"><i class="fa-solid fa-users"></i></span>
              <span class="fw-bold">Daftar Siswa</span>
            </a>
            <hr class="bg-sendary my-0">
          </li>
          <li class="">
            <a class="nav-link py-4 px-3 active" href="komite.php">
              <span class="fs-4 me-3"><i class="fa-solid fa-money-check"></i></span>
              <span class="fw-bold">Daftar Komite</span>
            </a>
            <hr class="bg-sendary my-0">
          </li>
          <li class="">
            <a class="nav-link py-4 px-3" href="jurusan.php">
              <span class="fs-4 me-3"><i class="fa-solid fa-building-user"></i></span>
              <span class="fw-bold">Daftar Jurusan</span>
            </a>
            <hr class="bg-sendary my-0">
          </li>
          <li class="">
            <a class="nav-link py-4 px-3" href="kelas.php">
              <span class="fs-4 me-3"><i class="fa-solid fa-landmark"></i></span>
              <span class="fw-bold">Daftar Kelas</span>
            </a>
            <hr class="bg-sendary my-0">
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas -->

  <!-- main -->
  <main class="mt-5">
    <div class="container-fluid">
      <div class="row py-3">
        <div class="col-md-12">
          <h1 class="display-6 fw-bold ms-3"><i class="fa-solid fa-users"></i> Daftar Komite</h1>
          <hr class="bg-secondary">
        </div>
      </div>

      <!-- tabel data siswa -->
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md">
              <button type="button" class="btn btn-outline-primary mb-3 fw-bold fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user-plus"></i> Tambah Data Daftar Komite</button>
            </div>
            <div class="col-md-3">
              <form class="d-flex ms-auto" action="" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" autofocus autocomplete="off" name="keyword">
                  <button class="btn btn-primary" type="submit" id="button-addon2" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
              </form>
            </div>
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Tahun Komite</th>
                <th scope="col">Iyuran Bulanan</th>
                <th scope="col" colspan="3">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- tabel halaman website komite -->
                <tr>
                  <th scope="row">1</th>
                  <td>ASWADI</td>
                  <td>XI-RPL-C</td>
                  <td>2022-2023</td>
                  <td>Rp 50.000</td>
                  <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalKartu"><i class="fa-solid fa-credit-card"></i></button>
                    <!-- Modal Kartu Komite -->
                    <div class="modal fade" id="ModalKartu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">KARTU KOMITE</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <table class="table">
                                <tbody>
                                  <!-- isi tabel kartu komite -->
                                  <tr>
                                    <th scope="row">Nama</th>
                                    <td>Muhammad Al-Qodri</td>
                                    <th scope="row">Pekerjaan Orang Tua/Wali</th>
                                    <td>PNS</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Kelas</th>
                                    <td>X-RPL-C</td>
                                    <th scope="row">Iyuran</th>
                                    <td>Rp 50.000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <!-- form update kartu komite -->
                            <form action="" method="post">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Bulan</th>
                                    <th scope="col">Tanggal Pembayaran</th>
                                    <th scope="col">Keterangan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <!-- tabel pembuktian Kartu komite -->
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Juli</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Agustus</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>September</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td>Oktober</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">5</th>
                                    <td>November</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">6</th>
                                    <td>Desember</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">7</th>
                                    <td>Januari</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">8</th>
                                    <td>Februari</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">9</th>
                                    <td>Maret</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">10</th>
                                    <td>April</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">11</th>
                                    <td>Mei</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">12</th>
                                    <td>Juni</td>
                                    <td><input type="date" class="form-control" name=""></td>
                                    <td>
                                      <input type="text" class="form-control" value="" disabled>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" name="update">Update Kartu Komite</button>
                              </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                  </td>
                  <td><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can" data-bs-toggle="modal" data-bs-target="#ModalDelate"></i></button>
                    <!-- Modal Hapus Data Siswa -->
                    <div class="modal fade" id="ModalDelate" tabindex="-1" aria-labelledby="ModalDelateLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalDelateLabel">Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="" method="post">
                            <input type="hidden" name="nis" id="nis" value="">
                            <div class="modal-body">
                              <p class="fw-bold fs-3" style="color: rgb(235, 79, 32)">Yakin Anda Ingin Menghapus Data Tersebut .?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                              <button type="submit" class="btn btn-primary" name="hapus">Yes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="fa-solid fa-user-pen"></i></button>
                    <!-- Modal Edit Data -->
                    <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA KOMITE SISWA</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <input type="hidden" name="id" value="">
                              <div class="mb-3">
                                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" list="datalistOptions" class="form-control border-warning" id="nama-siswa" name="nama" required autocomplete="off">
                                <datalist id="datalistOptions">
                                  <!-- lakukan pengulangan dgn foreach, data diperoleh dari tb_siswa kolom nama -->
                                  <option value="Aswadi"></option>
                                  <option value="Ardiansyah"></option>
                                  <option value="Serli"></option>
                                </datalist>
                              </div>
                              <div class="mb-3">
                                <label for="Kelas" class="form-label">Kelas</label>
                                <select class="form-select" aria-label="Default select example" name="kelas">
                                  <option selected value="Pilihan Sebelumnya">Pilihan sebelumnya</option>
                                  <!-- lakukan pengulangan menggunakan foreach dengan mengambil data dari tb_kelas kolom nama_kelas -->
                                  <option value="X-AKL">X-AKL</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="tahun_komite" class="form-label">Tahun Komite</label>
                                <select class="form-select" aria-label="Default select example" name="tahun_komite">
                                  <option selected value="Pilihan Sebelumnya">Pilihan sebelumnya</option>
                                  <!-- gunakan pengulang for -->
                                  <option value="2020-2021">2020-2021</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="pekerjaan_ortu" class="form-label">Pekerjaan Orang Tua/Wali Siswa</label>
                                <select class="form-select" aria-label="Default select example" name="pekerjaan_ortu">
                                  <option selected value="Pilihan Sebelumnya">Pilihan sebelumnya</option>
                                  <option value="PNS">PNS</option>
                                  <option value="NO PNS">NO PNS</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="ubah">Ubah Data Daftar Komite</button>
                              </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
            </tbody>
          </table>
          <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
              <nav aria-label="Page navigation example ms-auto">
                <ul class="pagination ms-auto">
                  <li class="page-item">
                    <a class="page-link bg-primary text-white" href="" aria-label="Previous" style="display: inline-block; width: 50px; text-align: center;">
                      <span aria-hidden="true"><i class="fa-solid fa-angles-left"></i></span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="" style="display: inline-block; width: 60px; text-align: center; font-weight: bold;">1</a></li>
                  <li class="page-item">
                    <a class="page-link bg-primary text-white" href="" aria-label="Next" style="display: inline-block; width: 50px; text-align: center;">
                      <span aria-hidden="true"><i class="fa-solid fa-angles-right"></i></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <div class=" bg-dark text-white text-center fixed-bottom">
      <div class="">
        <p>Copyright@2023, By: <span style="font-weight: bold; color:lightblue;">SMK Negeri 2 Kaimana</span></p>
      </div>
    </div>
  </main>
  <!-- main -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="js/script.js"></script>
  
</body>

</html>

<!-- Modal Tambah Data Siswa-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA KOMITE SISWA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="nis" class="form-label">Nama Lengkap</label>
            <input type="text" list="datalistOptions" class="form-control border-warning" id="nis-siswa" name="nis" required autocomplete="off">
            <datalist id="datalistOptions">
              <!-- lakukan pengulangan dgn foreach, data diperoleh dari tb_siswa kolom nama -->
              <option value="202072101">Aswadi</option>
              <option value="202072004">Ardiansyah</option>
              <option value="202072085">Serli</option>
            </datalist>
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" aria-label="Default select example" name="">
              <option selected>--Pilih Kelas--</option>
              <!-- lakukan pengulangan dgn foreach, data diperoleh dari tb_kelas kolom nama_kelas -->
              <option value="X-AKL">X-AKL</option>
              <option value="X-RPL-A">X-RPL-A</option>
              <option value="X-RPL-B">X-RPL-B</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tahun_komite" class="form-label">Tahun Komite</label>
            <select class="form-select" aria-label="Default select example" name="">
              <option selected>--Pilih Tahun Komite--</option>
              <!-- gunakan perulangan dengan for/while -->
              <option value="2020-2021">2020-2021</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="pekerjaan_ortu" class="form-label">Pekerjaan Orang Tua/Wali Siswa</label>
            <select class="form-select" aria-label="Default select example" name="">
              <option selected>--Pilih Pekerjaan Orang Tua/Wali--</option>
              <option value="PNS">PNS</option>
              <option value="NO PNS">NO PNS</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="">Tambah Data Daftar Komite</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
