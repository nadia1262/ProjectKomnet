<?php

$conn = mysqli_connect("localhost","root","","students");

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
    <title>KELAS</title>
    <style>
        body{
            background-color: white;
        }
        div ul li a.nav-link{
            color: whitesmoke;
            font-size: larger;
            font-family:'Times New Roman', Times, Serif;
        }
    </style>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<nav class="navbar navbar-expand-lg dark" style="background-color: darkblue;">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">KELAS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">ABSENSI <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../logout.php">LOGOUT <span class="sr-only">(current)</span></a>
      </li>
    
    </ul>
   </div>
</nav><br><br>

<div class="card-deck" style="margin: 5px 10px 1500px 10px;">
  <div class="card">
    <img src="A.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-family:'Times New Roman', Times, serif; text-align:center;">
          <a href="daftar.php">Kelas A</a>
      </h5>
    </div>
  </div>

  <div class="card">
    <img src="B.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-family:'Times New Roman', Times, serif; text-align:center;">
          <a href="#">Kelas B</a>
      </h5>
    </div>
  </div>

  <div class="card">
    <img src="C.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-family:'Times New Roman', Times, serif; text-align:center;">
          <a href="#">Kelas C</a>
      </h5>
    </div>
  </div>

  <div class="card">
    <img src="D.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-family:'Times New Roman', Times, serif; text-align:center;">
          <a href="#">Kelas D</a>
      </h5>
    </div>
  </div>
 
</div>
</body>
</html>