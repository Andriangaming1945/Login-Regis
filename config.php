<?php 
$namaserver = "localhost";
$namauser = "root";
$password = "";
$dbname = "user_db";

$conn = mysqli_connect($namaserver , $namauser, $password, $dbname);

if(!$conn){
    die("Kontol = koneksi tolol".mysqli_connect_error());
}

//echo "Koneksi sukses";
?>


