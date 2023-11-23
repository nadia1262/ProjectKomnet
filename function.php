<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "students";

$conn = mysqli_connect("localhost","root","","students");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
       $rows [] = $row; 
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nisn = htmlspecialchars ($data["nisn"]);
    $nama = htmlspecialchars ($data["nama"]);
    $ttl = htmlspecialchars ($data["ttl"]);
    $email= htmlspecialchars ($data["email"]);

    $query = "INSERT INTO students VALUES ('','$nisn','$nama','$ttl','$email')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nisn = htmlspecialchars ($data["nisn"]);
    $nama = htmlspecialchars ($data["nama"]);
    $ttl = htmlspecialchars ($data["ttl"]);
    $email = htmlspecialchars ($data["email"]);

    $query = "UPDATE students SET
                nisn = '$nisn',
                nama = '$nama',
                ttl = '$ttl',
                email = '$email'
                WHERE id = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM students WHERE
    nama LIKE '%$keyword%' OR
    nisn LIKE '%$keyword%' OR
    ttl LIKE '%$keyword%' OR
    email LIKE '%$keyword%'
    ";
    return query($query);
}


?>