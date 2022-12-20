<?php
class Koneksi{
    public $koneksi;
    public $host = "localhost";
    public $dbname = "footion";
    public $dbuser = "root";
    public $dbpass = "";
    public $db;

    function __construct()
    {
        $this->koneksi="mysql:host=".$this->host.";dbname=".$this->dbname.";charsetutf8";
        $this->db = new PDO($this->koneksi,$this->dbuser,$this->dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // function createUser($data){
    //     //INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, 'fidi', 'fidi123');
    //     $query = "INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, ?, ?)";
    //     $statement = $this->db->prepare($query);
    //     $parameters = [$data->user,$data->password];
    //     return $statement->execute($parameters);
    // }
}
