<?php
// Start the session
session_start();
if(isset($_POST['login'])){
  header("Location: index.php");
  exit;
}
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_komite");

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  //ambil data dari tabel user
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
  //cek username
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    //variabel session
    $_SESSION['login'] = true;

    if (password_verify($password, $row['password'])) {
      header("Location: index.php");
      exit;
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <title>SMK N2 Kaimana</title>
</head>

<body class="bg-dark">
  <div class="container position-relative">
    <div class="contenLogin w-50 bg-body m-3 p-5 border border-3 rounded border-warning shadow rounded position-absolute start-50 translate-middle-x">
      <div class="row">
        <div class="mb-5">
          <img src="img/logo smk.png" alt="" style="display: block; margin:auto; width: 200px;">
          <h2 class="mt-2 text-center">SMK NEGERI 2 KAIMANA</h2>
        </div>
        <div class="mb-3">
          <h3>LOGIN</h3>
        </div>
      </div>
      <div class="row">
        <div class="">
          <form action="" method="post">
            <div class="input-group flex-nowrap mb-3">
              <span class="input-group-text" id="addon-wrapping"> <i class="fa-solid fa-user"></i> </span>
              <input type="text" class="form-control border-warning" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username">
            </div>
            <div class="input-group flex-nowrap mb-3">
              <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
              <input type="password" class="form-control border-warning" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password">
            </div>
            <div class="btn-group d-grid" role="group" aria-label="Basic example">
              <button type="submit" class="btn btn-danger rounded-pill fw-bold" name="login">Login</button>
            </div>
          </form>
          <br>
          <div class="btn-group d-grid" role="group" aria-label="Basic example">
            <a class="btn btn-primary rounded-pill" href="registrasi.php" role="button">Daftar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
