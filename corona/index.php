<?php
    session_start();

    if(($_SESSION['id_level']=="")){
        header("Location: halaman_login.php?access_denied");
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Covid-19</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">

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
            <a class="nav-link" href="#">Tentang</a>
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
    <main>
      <div class="container-fluid p-0">
        <div class="site-content">
          <div class="d-flex justify-content-left">
            <div class="d-flex flex-column">
              <h1 class="site-title">Apa itu Virus Corona ? ? ?</h1>
              <p class="site-desc">Virus Corona atau (SARS-Cov-2) merupakan virus yang</br>
                menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19.</br>
                Virus corona bisa menyebabkan gangguan ringan sistem pernapasan, infeksi </br>
                paru-paru akut hingga kematian.</p>
                <div class="d-flex flex-row">
                  <input type="button" value="Read More" class="btn site-btn1 px-4 py-3 mr-4 btn-dark" onclick="location.href='https://www.kompas.com/sains/read/2020/03/19/120200123/tentang-virus-corona-covid-19-apa-itu-istilah-odp-pdp-dan-suspek';">
                </div>
            </div>
          </div>
        </div>
      </div>


      <div class="section-1">
        <div class="container text-center">
          <h1 class="heading-1">Imbauan Keselamatan</h1>

          <div class="row justify-content-center text-center">
            <div class="col-md-4">
              <div class="card" style="width:20rem;">
                <img src="img/org.jpg" alt="Image1" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Tenaga Medis</h4>
                  <p class="card-text">-Memakai baju pelindung</br> -Melindungi wajah</br> -Menggunkan sarung tangan</br> -Sering mencuci tangan</br> -Mengisolasi pasien</br> -Semprot disinfektan</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card" style="width:20rem;">
                <img src="img/org2.jpg" alt="Image2" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Karyawan Toko</h4>
                  <p class="card-text">-Memakai baju pelindung</br> -Sering mencuci tangan</br> -Menggunkan sarung tangan</br> -Hindari limbah</br> -Menggunakan masker pelindung</br> -Semprot disinfektan</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card" style="width:20rem;">
                <img src="img/org3.jpg" alt="Image3" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Masyarakat Awam</h4>
                  <p class="card-text">-Memakai masker pelindung</br> -Memakai sarung tangan</br> -Jaga jarak</br> -Sering cuci tangan</br> -Hindari keramaian</br> -Hati-hati saat menyentuh</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="section-2">
        <div class="container-fluid">
              <div class="d-flex justify-content-end">
                <div class="d-flex flex-column m-4">
                  <h1 class="heading-1">Self Assesment</h1>
                  <p class="para">Self assesment adalah alat sederhana yang bisa membantu</br>
                    menentukan apakah Anda sehat-sehat saja atau ada gejala yang memerlukan</br>
                    penilaian, pemeriksaan dan pengujian lebih lanjut untuk COVID-19.</p>

                    <a href="http://localhost/corona/checkup/awal.php" class="btn btn-danger">Cek Sekarang</a>
            </div>
          </div>
        </div>
      </div>

      <section class="section-4">
        <div class="container text-center">
          <h1 class="text-dark">Kategori Pasien Kasus Corona</h1>
          <p class="text-secondary">Simak penjelasan di bawah ini</p>
        </div>
        <div class="team row ">
          <div class="col-md-4 col-12 text-center">
              <div class="card mr-2 d-inline-block shadow-lg">
                  <div class="card-img-top">
                    <img src="img/odp.jpg" class="img-fluid border-radius p-4" alt="">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Orang Dalam Pemantauan</h3>
                    <p class="card-text">
                      PDP adalah mereka yang memiliki gejala panas badan dan gangguan saluran pernapasan.
                      Gangguan saluran pernapasan itu bisa ringan atau berat, serta pernah berkunjung ke atau
                      tinggal di daerah yang diketahui merupakan daerah penularan Covid-19. Tidak hanya itu,
                      PDP ini juga memiliki indikasi atau diketahui pernah berkontak langsung dengan
                      kasus yang terkonfirmasi atau probabel Covid-19.
                    </p>
                    <a href="https://www.kompas.com/sains/read/2020/03/19/120200123/tentang-virus-corona-covid-19-apa-itu-istilah-odp-pdp-dan-suspek" class="text-secondary text-decoration-none">Baca Selengkapnya...</a>
                    <p class="text-black-50">Stay Safe Stay Health</p>
                  </div>
                </div>
          </div>
          <div class="col-md-4 col-12">
              <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                  <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                      <div class="card mr-2 d-inline-block shadow">
                        <div class="card-img-top">
                          <img src="img/pdp.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                        </div>
                        <div class="card-body">
                          <h3 class="card-title">Pasien Dalam Pengawasan</h3>
                          <p class="card-text">
                            Pasien ODP memiliki gejala yang lebih ringan pada umumnya, seperti batuk,
                            sakit tenggorokan, dan demam. Akan tetapi, tidak ada kontak erat dengan
                            penderita positif. Pasien dengan status ODP dapat dipulangkan untuk selanjutnya
                            melakukan karantina sendiri selama kurang lebih 14 hari.
                          </p>
                          <a href="https://tirto.id/ketahui-beda-arti-status-otg-odp-dan-pdp-pada-kasus-covid-19-eJZk" class="text-secondary text-decoration-none">Baca Selengkapnya...</a>
                          <p class="text-black-50">Stay Safe Stay Health</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card  d-inline-block mr-2 shadow">
                        <div class="card-img-top">
                          <img src="img/pdp.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                        </div>
                        <div class="card-body">
                          <h3 class="card-title">Pasien Dalam Pengawasan</h3>
                          <p class="card-text">
                            Pasien ODP memiliki gejala yang lebih ringan pada umumnya, seperti batuk,
                            sakit tenggorokan, dan demam. Akan tetapi, tidak ada kontak erat dengan
                            penderita positif. Pasien dengan status ODP dapat dipulangkan untuk selanjutnya
                            melakukan karantina sendiri selama kurang lebih 14 hari.
                          </p>
                          <a href="https://tirto.id/ketahui-beda-arti-status-otg-odp-dan-pdp-pada-kasus-covid-19-eJZk" class="text-secondary text-decoration-none">Baca Selengkapnya...</a>
                          <p class="text-black-50">Stay Safe Stay Health</p>
                        </div>
                      </div>
                    </div>
                </div>
          </div>
          </div>
          <div class="col-md-4 col-12 text-center">
              <div class="card mr-2 d-inline-block shadow-lg">
                  <div class="card-img-top">
                    <img src="img/otg.jpg" class="img-fluid border-radius p-4" alt="">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Orang Tanpa Gejala</h3>
                    <p class="card-text">
                      Orang Tanpa Gejala merupakan seseorang yang tidak memiliki gejala tetapi
                      memiliki risiko tertular dari orang terkonfirmasi COVID-19. Orang yang memiliki
                      riwayat kontak fisik dengan kasus konfirmasi COVID-19 dapat masuk dalam kriteria ini.
                    </p>
                    <a href="https://tirto.id/ketahui-beda-arti-status-otg-odp-dan-pdp-pada-kasus-covid-19-eJZk" class="text-secondary text-decoration-none">Baca Selengkapnya...</a>
                    <p class="text-black-50">Stay Safe Stay Health</p>
                  </div>
                </div>
          </div>
    </main>

    <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">INFINITY-28 SMK TELKOM MALANG</h4>
          <p class="text-muted">Retno Mentari</br>
                                Kelas X RPL 1</br>
                                No.absen 38</p>
          <p class="pt-4 text-muted">#merdeka belajar</br>
                                #merdekabelajarmoklet</br>
                                #mokletsoftwareengineering</br>
                                #studyfromhome</p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">WUJUDKAN INDONESIA BEBAS CORONA</h4>
          <p class="text-muted"> Stay Healthy Stay At Home </p>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Me</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
