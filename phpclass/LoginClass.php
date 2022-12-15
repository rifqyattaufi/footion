<?php

class LoginClass{
    public $email;
    public $password;

    public function __construct($email , $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function print()
    {
        echo $this->email."<br>".$this->password;
    }
}