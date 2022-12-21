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

}
?>