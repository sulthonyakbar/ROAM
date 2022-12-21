<?php 
class ProsesLogin {
    public $username,
            $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function login(){
        return "Login";
    }
    
}

$login = new ProsesLogin("", "");

echo $login->login()

?>
