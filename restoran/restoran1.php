<?php
//bebek
$bebek = file_get_contents('data/bebek_goreng.json');
$data_bebek = json_decode($bebek, true);
$menu_bebek = $data_bebek['menu'];
//bintang lima
$bintang = file_get_contents('data/bintang_lima.json');
$data_bintang = json_decode($bintang, true);
$menu_bintang = $data_bintang['menu'];
//padang
$padang = file_get_contents('data/padang_sederhana.json');
$data_padang = json_decode($padang, true);
$menu_padang = $data_padang['menu'];
//sate
$sate = file_get_contents('data/sate_senayan.json');
$data_sate = json_decode($sate, true);
$menu_sate = $data_sate['menu'];
//sushi
$sushi = file_get_contents('data/sushi.json');
$data_sushi = json_decode($sushi, true);
$menu_sushi = $data_sushi['menu'];
//warung tegal
$warteg = file_get_contents('data/warung_tegal.json');
$data_warteg = json_decode($warteg, true);
$menu_warteg = $data_warteg['menu'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="75">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row mt-1">
        <div class="col">
            <h1>Pilihan Restoran</h1>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-md-4 p-3">
        <div class="card">
            <img src="img/<?php echo $data_bebek['gambar'] ?>" class="card-img-top" height="200">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data_bebek['nama_restoran'] ?></h5>
                <p class="card-text"><?php echo $data_bebek['lokasi'] ?></p>
                <a href="#" class="btn btn-primary" data-target="#modal">Lihat Menu</a>
            </div>
            </div>
        </div>

        <!-- modal -->
        <!-- <div class="modal-dialog modal-dialog-centered" id="modal">
        ....
        </div> -->


        <div class="col-md-4 p-3">
        <div class="card">
            <img src="img/<?php echo $data_bintang['gambar'] ?>" class="card-img-top" height="200">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data_bintang['nama_restoran'] ?></h5>
                <p class="card-text"><?php echo $data_bintang['lokasi'] ?></p>
                <a href="#" class="btn btn-primary">Lihat Menu</a>
            </div>
            </div>
        </div>

        <div class="col-md-4 p-3">
        <div class="card">
            <img src="img/<?php echo $data_padang['gambar'] ?>" class="card-img-top" height="200">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data_padang['nama_restoran'] ?></h5>
                <p class="card-text"><?php echo $data_padang['lokasi'] ?></p>
                <a href="#" class="btn btn-primary">Lihat Menu</a>
            </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
        <div class="card">
            <img src="img/<?php echo $data_sate['gambar'] ?>" class="card-img-top" height="200">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data_sate['nama_restoran'] ?></h5>
                <p class="card-text"><?php echo $data_sate['lokasi'] ?></p>
                <a href="#" class="btn btn-primary">Lihat Menu</a>
            </div>
            </div>
        </div>

        <div class="col-md-4 p-3">
        <div class="card">
            <img src="img/<?php echo $data_sushi['gambar'] ?>" class="card-img-top" height="200">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data_sushi['nama_restoran'] ?></h5>
                <p class="card-text"><?php echo $data_sushi['lokasi'] ?></p>
                <a href="#" class="btn btn-primary">Lihat Menu</a>
            </div>
            </div>
        </div>

        <div class="col-md-4 p-3">
        <div class="card">
            <img src="img/<?php echo $data_warteg['gambar'] ?>" class="card-img-top" height="200">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data_warteg['nama_restoran'] ?></h5>
                <p class="card-text"><?php echo $data_warteg['lokasi'] ?></p>
                <a href="#" class="btn btn-primary">Lihat Menu</a>
            </div>
            </div>
        </div>

    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>