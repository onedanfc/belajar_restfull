<?php 
$data = $_GET['restoran'];
$restoran = file_get_contents('data/' . $data . '.json');
$detailrestoran = json_decode($restoran, true);
$menu = $detailrestoran['menu'];
$review = $detailrestoran['ulasan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran - Pilihan Menu</title>
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
          <a class="nav-link active" aria-current="page" href="restoran1.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row mt-1">
        <?php foreach($menu as $m) : ?>
        <div class="col-md-4 p-3">
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3><?php echo $data ?></h3>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $m['nama_menu'] ?></li>
                    <li class="list-group-item"><?php echo $m['harga'] ?></li>
                </ul>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container mt-3">
    <h3>Ulasan</h3>
    <div class="row mt-1">
<?php foreach($review as $ulasan) : ?>
    <div class="col-md-6 p-1">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success"><?php echo $ulasan['nama_pelanggan']; ?></li>
            <li class="list-group-item list-group-item-danger"><?php echo $ulasan['komentar']; ?></li>
            <li class="list-group-item list-group-item-warning"><?php echo $ulasan['rating']; ?></li>
        </ul>
    </div>
<?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>