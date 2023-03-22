<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_komite");

//untuk tombol daftar
if (isset($_POST['daftar'])) {
    //tampung data dari form registrasi
    $username = stripslashes($_POST['username']);
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
    $pssword2 = mysqli_real_escape_string($conn, $_POST['password2']);
    //konfirmasi password
    if ($password1 !== $pssword2) {
        echo "
            <script>
                alert('Konfirmasi Passwrod tidak sesuai');
            </script>
        ";
    } else {
        // eksripsi password
        $password1 = password_hash($password1, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password1')");
        if (mysqli_affected_rows($conn) > 0) {
            echo "
            <script>
                alert('Anda Berhasil Daftar');
                document.location.href = 'index.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Gagal Daftar');
                document.location.href = 'registrasi.php';
            </script>
            ";
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
                    <h3>REGISTRASI AKUN</h3>
                </div>
            </div>
            <div class="row">
                <form action="" method="post">
                    <div class="">
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping"> <i class="fa-solid fa-user"></i> </span>
                            <input type="text" class="form-control border-warning" placeholder="username" aria-label="username" aria-describedby="addon-wrapping" name="username">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control border-warning" placeholder="Password" aria-label="password1" aria-describedby="addon-wrapping" name="password1">
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control border-warning" placeholder="konfirmasi password" aria-label="password2" aria-describedby="addon-wrapping" name="password2">
                        </div>
                        <div class="btn-group d-grid" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-primary rounded-pill fw-bold" name="daftar">Daftar</button>
                        </div>
                    </div>
                </form>
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
