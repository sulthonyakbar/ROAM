<?php 

require ("./Database.php");

class Pengaduan {
    public $id,
            $pilihan,
            $foto,
            $waktu,
            $tanggal,
            $deskripsi;

    public function __construct($pilihan, $foto, $waktu, $tanggal, $deskripsi){
        $this->pilihan = $pilihan;
        $this->foto = $foto;
        $this->waktu = $waktu;
        $this->tanggal = $tanggal;
        $this->deskripsi = $deskripsi;
    }

    public function addPengaduan(){
        $database = new Database("localhost","db_roam","root","");
        $query = "INSERT INTO `pengaduan` (`id_pengaduan`, `pilihan`, `foto`, `waktu`, `tanggal`, `deskripsi`) VALUES (NULL, ?, ?, ?, ?, ?)";
        $statement = $database->db->prepare($query);
        $parameters = [$this->pilihan,$this->foto,$this->waktu,$this->tanggal,$this->deskripsi];
        return $statement->execute($parameters);
    }

    // public function editPengaduan(){
    //     return "Edit Pengaduan";
    // }

    // public function deletePengaduan(){
    //     return "Delete Pengaduan";
    // }

    // public function getPengaduan(){
    //     return "$this->pilihan, $this->foto, $this->waktu, $this->tanggal, $this->deskripsi";
    // }
    
}

?>