<?php 
require("PHP/Pengaduan.php");
// require ("Database.php");

$pilihan = $_POST['pilihan'];
$foto = $_POST['foto'];
$waktu = $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

$pengaduan = new Pengaduan($pilihan, $foto, $waktu, $tanggal, $deskripsi);
$pengaduan->addPengaduan();

// echo "<pre>";
// var_dump($pengaduan);
// echo "</pre>";

// $database = new Database("localhost","db_roam","root","");
// $database->addPengaduan($pengaduan);
?>