<?php 
class Pengaduan {
    public $pilihan,
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

    // public function addPengaduan(){
    //     return "Add Pengaduan";
    // }

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