<?php 
<<<<<<< HEAD
require("PHP/Pengaduan.php");
// require ("Database.php");
=======
class ProsesPengaduan {
    public $pilihan,
            $foto,
            $waktu,
            $tanggal,
            $deskripsi;
>>>>>>> 05198d22f136171c922f06621cbc65761390a5db

$pilihan = $_POST['pilihan'];
$foto = $_POST['foto'];
$waktu = $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

$pengaduan = new Pengaduan($pilihan, $foto, $waktu, $tanggal, $deskripsi);
$pengaduan->addPengaduan();

<<<<<<< HEAD
// echo "<pre>";
// var_dump($pengaduan);
// echo "</pre>";

// $database = new Database("localhost","db_roam","root","");
// $database->addPengaduan($pengaduan);
?>
=======
    public function editPengaduan(){
        return "Edit Pengaduan";
    }

    public function deletePengaduan(){
        return "Delete Pengaduan";
    }

    public function getPengaduan(){
        return "$this->pilihan, $this->foto, $this->waktu, $this->tanggal, $this->deskripsi";
    }
    
}

$pengaduan = new ProsesPengaduan("", "", "", "", "", "");

echo $pengaduan->addPengaduan();
echo "<br>";
echo $pengaduan->editPengaduan();
echo "<br>";
echo $pengaduan->deletePengaduan();
echo "<br>";
echo $pengaduan->getPengaduan();

?>
>>>>>>> 05198d22f136171c922f06621cbc65761390a5db
