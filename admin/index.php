<?php

include '../function.php';
$students = query("SELECT * FROM students");

if( isset($_POST["cari"]) ) {
    $students = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <title>INDEX</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style="font-weight: lighter;"><h style="color: darkblue; font-weight: bold;">MAN 2 </h>KUDUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    
    <label class="nav-item active">
        <a href="../logout.php" type="button" class="btn btn-warning">Logout</a>
    </label>
  </div>
</nav>

<nav class="navbar navbar-expand-lg dark" style="background-color: darkblue;">
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <h3 style="color: white;">Dashboard Admin</h3>
  </div>
</nav>
<br><br>

<div class="section">
    <div class="container">
        <form action="" method="post">
            <div class="boc" style="text-align: right;">
                <a href="tambah.php" class="btn btn-primary">Tambah Data Siswa</a>
            </div>
            <input type="text" name="keyword" size="35" autofocus placeholder="Masukkan Keyword Pencarian.." autocomplete="off">
            <button type="submit" name="cari">Cari</button>
        </form>
        <div class="margin">
            <table class="table">
                <thead style="text-align: center;">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">TTL</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach($students as $student) : ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $student["id"]; ?>" type="button" class="btn btn-success">Ubah</a>
                                <a href="hapus.php?id=<?= $student["id"]; ?>" type="button" class="btn btn-danger">Hapus</a>
                            </td>
                            <td><?= $student["nisn"]; ?></td>
                            <td><?= $student["nama"]; ?></td>
                            <td><?= $student["ttl"]; ?></td>
                            <td><?= $student["email"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>