<?php 
class prosesRegistrasi {
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

$registrasi = new prosesRegistrasi("", "", "", "");

echo $registrasi->registrasi()

?>