<?php

include '../function.php';

$id = $_GET["id"];
$go = query("SELECT * FROM students WHERE id = $id") [0];


if (isset($_POST["submit"]) ) {
    if(ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href ='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href ='index.php';
        </script>
        ";
    }
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
    <title>UBAH</title>
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

<h2 style="text-align: center;">Ubah Data Siswa</h2>
<div class="shadow p-3 mb-5 bg-white rounded">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $go["id"]; ?>" autocomplete="off" >
                        <ul> 
                        <li class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" required value="<?= $go["nisn"]; ?>">
                            </li><br>
                            <li class="form-group">
                                <label for="nama">nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $go["nama"]; ?>">
                            </li><br>
                            <li class="form-group">
                                <label for="ttl">ttl</label>
                                <input type="text" class="form-control" id="ttl" name="ttl" required value="<?= $go["ttl"]; ?>">
                            </li><br>
                            <li class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" name="email" required value="<?= $go["email"]; ?>">
                            </li><br>
                            <button type="submit" class="btn btn-primary" name="submit">Ubah Data Siswa</button>
                        </ul>
                    </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>