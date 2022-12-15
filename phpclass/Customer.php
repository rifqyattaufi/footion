<?php
class Customer extends User{
    public $gender;
    public $ttl;
    public $nama;

    function register(){
        echo 'register customer';
    }
    function makeOrder(){
        echo 'bikin pesanan';
    }
    function makeDonation(){
        echo 'mengirim donasi';
    }
}