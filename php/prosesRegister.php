<?php
require("../phpclass/Customer.php");
$nama = $_POST['namaLengkap'];
$email = $_POST['emailUser'];
$tanggal = $_POST['ttlUser'];
$gender = $_POST['gender'];
$password = $_POST['pass'];

$customer = new Customer($nama, $email, $tanggal, $gender, $password);
$customer->register();
header("Location: ../index.php");
