<?php 
require("PHP/Pengaduan.php");

$pilihan = $_POST['pilihan'];
$foto = $_POST['foto'];
$waktu = $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

$pengaduan = new Pengaduan($pilihan, $foto, $waktu, $tanggal, $deskripsi);
$pengaduan->addPengaduan();
?>
