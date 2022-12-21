<?php 
class Database{
    public $koneksi;
    public $host;
    public $dbname;
    public $dbuser;
    public $dbpassword;
    public $db;

    function __construct($host, $dbname, $dbuser, $dbpassword)
    {
        $this->koneksi="mysql:host=".$host.";dbname=".$dbname.";charsetutf8";
        $this->db = new PDO($this->koneksi, $dbuser, $dbpassword);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // function createUser($data){
    //     $query = "INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `repassword`) VALUES (NULL, ?, ?, ?, ?)";
    //     $statement = $this->db->prepare($query);
    //     $parameters = [$data->nama,$data->username,$data->password,$data->repassword];
    //     return $statement->execute($parameters);
    // }

    // function createPengaduan($data){
    //     $query = "INSERT INTO `pengaduan` (`id_pengaduan`, `pilihan`, `foto`, `waktu`, `tanggal`, `deskripsi`) VALUES (NULL, ?, ?, ?, ?, ?)";
    //     $statement = $this->db->prepare($query);
    //     $parameters = [$data->pilihan,$data->foto,$data->waktu,$data->tanggal,$data->deskripsi];
    //     return $statement->execute($parameters);
    // }
}
?>