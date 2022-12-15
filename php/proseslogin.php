<?php

require("../phpclass/LoginClass.php");

$email = $_POST['email'];
$password = $_POST['password'];

$user = new LoginClass($email,$password);

$user->print();

echo "<br>";
echo "<pre>";
var_dump($user);
echo "</pre>";
