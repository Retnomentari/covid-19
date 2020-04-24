<?php
include '../config.php';

$sql = "SELECT * FROM t_pasien INNER JOIN status
        ON t_pasien.id_status = status.id_status
        ORDER BY t_pasien.nama_lengkap";

$res = mysqli_query($koneksi, $sql);

$pasien = array();

while ($data = mysqli_fetch_assoc($res)){
    $pasien[] = $data;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Covid-19</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Lato&family=Pacifico&family=Righteous&family=Roboto+Condensed&family=Ubuntu:wght@700&display=swap');

    body{
      margin: 0;
      padding: 0;
      background: url("../img/lg.jpg");
      background-size: cover;
      font-family: 'Lato';
    }

    .navbar-brand{
      font-family: 'Pacifico';
      font-size: 35px;
      color: #63707e !important;
    }

    .nav-link{
      font-size: 16px;
      margin: 15px;
      color: black !important;
      font-family: 'Roboto';
    }

    .nav-link:hover{
      color: #5d13e7 !important;
    }

    .active .nav-link{
      color: #5d13e7 !important;
    }

    .menu-right-btn{
      padding: 13px 46px;
      margin-right: 4%;
      background-color: transparent;
      transition: all 300ms ease-in;
    }

    .menu-right-btn:hover{
      color: white;
      background-color: #5d13e7;
    }

    .card{
      background: #7cdfff;
    }
    </style>

  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="#" class="navbar-brand ml-6">CORONA<span style="color:#ff0000;">VIRUS</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
      aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse"></div>
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/corona/index.php">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/corona/checkup/awal.php">Check Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/corona/profil.php">About Me</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="post" action="http://localhost/corona/halaman_login.php#">
            <button class="btn menu-right-btn border" type="submit">Logout</button>
        </form>
        </div>
      </nav>
  </header>

  <body>
    <div class="container">
    <div class="row mt-4">
        <div class="col-md">

    <div class="card">
        <div class="card-header">
            <h2 class="card-title"> <i class="fas fa-hospital-user"></i> Data Pasien</h2>
        </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Suhu Badan</th>
                    <th scope="col">Tanggal Cek</th>
                    <th scope="col">Hasil Cek</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $no = 1;
                        foreach ($pasien as $p) { ?>
                            <tr>
                                <th scope="row"><?= $no?></th>
                                <td><?= $p['nama_lengkap']?></th>
                                <td><?= $p['umur']?></th>
                                <td><?= $p['suhu']?></th>
                                <td><?= date('d F Y', strtotime($p['tgl_cek']))?></th>
                                <td><?= $p['status']?></th>
                                <td>
                                    <a href="hapus.php?id_pasien=<?= $p['id_pasien']?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>

                    <?php
                    $no++;
                        }
                    ?>
                </tbody>
        </table>
        </div>
    </div>
        </div>
    </div>
</div>








  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
