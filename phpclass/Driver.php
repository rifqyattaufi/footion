<?php
class Driver extends User{
    public $nama;
    private $ttl;
    public $gender;
    public $tipeMotor;
    private $sim;

    public function __construct($nama, $ttl, $gender, $tipeMotor, $sim) {
        $this->$nama = $nama;
        $this->$ttl = $ttl;
        $this->$gender = $gender;
        $this->$tipeMotor = $tipeMotor;
        $this->$sim = $sim;
    }
    public function editDriver($nama, $ttl, $gender, $tipeMotor, $sim)
    {
        $this->$nama = $nama;
        $this->$ttl = $ttl;
        $this->$gender = $gender;
        $this->$tipeMotor = $tipeMotor;
        $this->$sim = $sim;
        echo "edit driver"
    }
    public function deleteDriver()
    {
        echo "delete driver";
    }
}