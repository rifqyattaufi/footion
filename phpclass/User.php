<?php
class User{
    public $id;
    protected $email;
    protected $password;
    
    function login() {
        echo 'login';
    }
    function editProfile() {
        echo 'edit profile';
    }
    function deleteUser() {
        echo 'delete user';
    }
}