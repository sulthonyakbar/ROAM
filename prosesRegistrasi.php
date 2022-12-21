<?php 
require("PHP/User.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$registrasi = new User($nama, $username, $password);
$registrasi->Registrasi();
?>
