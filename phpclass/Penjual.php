<?php
class Penjual extends User{
    public $nama;
    public $alamat;

    public function __construct($nama, $alamat) {
        $this->$nama = $nama;
        $this->$alamat = $alamat;
    }

    function addPenjual($nama, $alamat){
        $this->$nama = $nama;
        $this->$alamat = $alamat;
        echo "add penjual";
    }
    function editPenjual($nama, $alamat)
    {
        $this->$nama = $nama;
        $this->$alamat = $alamat;
        echo "edit penjual";
    }
    public function deletePenjual()
    {
        echo "delete penjual";
    }
    public function seePenjual()
    {
        echo "see penjual ". $nama . " " . $alamat; 
    }

}                                                                                                                                                                                                                                                                                                                                                                        