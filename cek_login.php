<?php

require 'function.php';

if(isset($_POST['login']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin") {
        $result = mysqli_query($conn, "SELECT *FROM admin WHERE username='$username' AND password='$password' ");
        $data = mysqli_fetch_assoc($result);

        if (mysqli_num_rows ($result) === 1) {
            $_SESSION['admin'] = true;
            $_SESSION['pengunjung'] = "admin";
            $_SESSION['login'] = true;
            header ("Location: admin/index.php");
            exit;
        }else {
            $_SESSION["gagal"] = true;
            header("Location: login.php");
        }
    } else {
        $result = mysqli_query($conn, "SELECT *FROM user WHERE username='$username' AND password='$password' ");
        $data = mysqli_fetch_assoc($result);
        
        if (mysqli_num_rows ($result) === 1) {
            $_SESSION['user'] = true;
            $_SESSION['admin'] = "admin";
            $_SESSION['pengunjung'] = $user;
            header ("Location: pengunjung/kelas.php");
            exit;
        }else {
            $_SESSION["gagal"] = true;
            header("Location: login.php");
        }
    }
}

?>