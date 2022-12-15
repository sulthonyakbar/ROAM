<?php 
class Detail {
    public $alamat,
            $koordinat1,
            $koordinat2;

    public function __construct($alamat, $koordinat1, $koordinat2){
        $this->alamat = $alamat;
        $this->koordinat1 = $koordinat1;
        $this->koordinat2 = $koordinat2;
    }

    // public function addDetail(){
    //     return "Add Detail";
    // }

    // public function editDetail(){
    //     return "Edit Detail";
    // }
        
    // public function deleteDetail(){
    //     return "Delete Detail";
    // }

    // public function getDetail(){
    //     return "$this->alamat, $this->koordinat1, $this->koordinat2";
    // }
    

?>
