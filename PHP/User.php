<?php 

require ("./Database.php");

class User {
    public $id,
            $nama,
            $username,
            $password;

    public function __construct($nama, $username, $password){
        $this->nama = $nama;
        $this->username = $username;
        $this->password = $password;
    }

    public function Registrasi(){
        $database = new Database("localhost","db_roam","root","");
        $query = "INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`) VALUES (NULL, ?, ?, ?)";
        $statement = $database->db->prepare($query);
        $parameters = [$this->nama,$this->username,md5($this->password)];
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