<?php
require('../Koneksi.php');
require('User.php');
class Customer extends User
{
    public $gender;
    public $ttl;
    public $nama;

    public function __construct($nama, $email, $ttl, $gender, $password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->ttl = $ttl;
        $this->gender = $gender;
        $this->password = $password;
    }

    function register()
    {
        $conn = new Koneksi();
        $query = "INSERT INTO `customer` (`nama`, `email`, `ttl`, `gender`, `password`) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->db->prepare($query);
        $parameters = [$this->nama, $this->email, $this->ttl, $this->gender, $this->password];
        return $statement->execute($parameters);
    }
}
