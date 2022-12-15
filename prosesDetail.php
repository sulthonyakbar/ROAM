<?php 
// class ProsesDetail {
//     public $alamat,
//             $koordinat1,
//             $koordinat2;

//     public function __construct($alamat, $koordinat1, $koordinat2){
//         $this->alamat = $alamat;
//         $this->koordinat1 = $koordinat1;
//         $this->koordinat2 = $koordinat2;
//     }

//     public function addDetail(){
//         return "Add Detail";
//     }

//     public function editDetail(){
//         return "Edit Detail";
//     }

//     public function deleteDetail(){
//         return "Delete Detail";
//     }

//     public function getDetail(){
//         return "$this->alamat, $this->koordinat1, $this->koordinat2";
//     }
    
//}

// $detail = new ProsesDetail("", "", "");

// echo $detail->addDetail();
// echo "<br>";
// echo $detail->editDetail();
// echo "<br>";
// echo $detail->deleteDetail();
// echo "<br>";
// echo $detail->getDetail();

require ("PHP/Detail.php");

$alamat = $_POST['alamat'];
$koordinat1 = $_POST['koordinat1'];
$koordinat2 = $_POST['koordinat2'];

$detail= new Detail($alamat,$koordinat1,$koordinat2);
echo "<pre>";
var_dump($detail);
echo "<pre>";


?>
