<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "project.akhir";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
// Check connection
if (!$koneksi) {
    echo "koneksi gagal";
}

?>