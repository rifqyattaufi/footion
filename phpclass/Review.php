<?php
require('../Koneksi.php');
class Review {
    public $nama;
    public $id_pesanan;
    public $id_review;
    public $kritik;
    public $rating;
    public $bukti;

    public function __construct($nama, $id_pesanan, $kritik, $rating, $bukti)
    {
        $this->nama = $nama;
        $this->id_pesanan = $id_pesanan;
        $this->kritik = $kritik;
        $this->rating = $rating;
        $this->bukti = $bukti;
    }

    function kritik()
    {
        $conn = new Koneksi();
        $query = "INSERT INTO `review`(`Id Pesanan`, `Nama`, `Kritik dan Saran`, `Rating`, `Bukti Foto`) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->db->prepare($query);
        $parameters = [$this->nama, $this->id_pesanan, $this->kritik, $this->rating, $this->bukti];
        return $statement->execute($parameters);
    }
}