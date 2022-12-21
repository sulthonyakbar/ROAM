<?php 
<<<<<<< HEAD
require("PHP/User.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$registrasi = new User($nama, $username, $password);
$registrasi->Registrasi();
?>
=======
class ProsesRegistrasi {
    public $nama,
            $username,
            $password,
            $repassword;

    public function __construct($nama, $username, $password, $repassword){
        $this->nama = $nama;
        $this->username = $username;
        $this->password = $password;
        $this->repassword = $repassword;
    }

    public function registrasi(){
        return "Registrasi";
    }
    
}

$registrasi = new ProsesRegistrasi("", "", "", "");

echo $registrasi->registrasi()

?>
>>>>>>> 05198d22f136171c922f06621cbc65761390a5db
