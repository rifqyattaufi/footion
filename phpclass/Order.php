<?php
require('.../Koneksi.php');
class Order{
    public $id_resto;
    private $id_pesanan;
    private $jumlah;
    private $total;
    protected $bayar;
    private $alamat;

    public function __construct($id_resto, $id_pesanan, $jumlah, $total, $bayar, $alamat)
    {
        $this->resto = $id_resto;
        $this->pesanan = $id_pesanan;
        $this->jumlah = $jumlah;
        $this->total = $total;
        $this->bayar = $bayar;
        $this->alamat = $alamat;
    }

    function pesan()
    {
        $db = new Koneksi();
        $query = "INSERT INTO `order`(`resto`, `pesanan`, `jumlah`, `total`, `bayar`, `alamat`) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $db->db->prepare($query);
        $parameters =[$this->id_resto, $this->id_pesanan, $this->jumlah, $this->total, $this->bayar, $this->alamat];
        return $statement->execute($parameters);
    }
    
}