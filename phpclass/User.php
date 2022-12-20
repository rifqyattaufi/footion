<?php
class User{
    public $email;
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