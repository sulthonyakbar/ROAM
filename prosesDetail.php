<?php 
require("PHP/Detail.php");

$alamat = $_POST['alamat'];
$koordinat1 = $_POST['koordinat1'];
$koordinat2 = $_POST['koordinat2'];


$detail = new Detail($alamat, $koordinat1, $koordinat2);
$detail->addDetail();
?>
