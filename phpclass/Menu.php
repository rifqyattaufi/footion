<?php
class Menu extends Penjual{
    public $kategori;
    public $nama;
    public $harga;

    public function __construct($kategori, $nama, $harga) {
        $this->$kategori = $kategori;
        $this->$nama = $nama;
        $this->$harga = $harga;
    }
    public function seeMenu()
    {
        echo "seeMenu" . $kategori . " " . $nama . " " . $harga;
    }
    public function editMenu($kategori, $nama, $harga)
    {
        $this->$kategori = $kategori;
        $this->$nama = $nama;
        $this->$harga = $harga;
    }
    public function deleteMenu()
    {
        echo "delete menu";
    }
}