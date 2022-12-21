<?php

require ("./Database.php");

class Detail {
    public $id,
            $alamat,
            $koordinat1,
            $koordinat2;

    public function __construct($alamat, $koordinat1, $koordinat2){
        $this->alamat = $alamat;
        $this->koordinat1 = $koordinat1;
        $this->koordinat2 = $koordinat2;
    }

    public function addDetail(){
        $database = new Database("localhost","db_roam","root","");
        $query = "INSERT INTO `detail` (`id_detail`, `alamat`, `koordinat1`, `koordinat2`) VALUES (NULL, ?, ?, ?)";
        $statement = $database->db->prepare($query);
        $parameters = [$this->alamat,$this->koordinat1,$this->koordinat2];
        return $statement->execute($parameters);    }

    // public function editDetail(){
    //     return "Edit Detail";
    // }

    // public function deleteDetail(){
    //     return "Delete Detail";
    // }

    // public function getDetail(){
    //     return "$this->alamat, $this->koordinat1, $this->koordinat2";
    // }
    
}
?>