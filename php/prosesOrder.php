<?php
require("../phpclass/Order.php");
$id_resto = $_POST['resto'];
$id_pesanan = $_POST['makanan'];
$jumlah = $_POST['jumlahmakanan'];
$total = $_POST['totalpesanan'];
$bayar = $_POST['metodebayar'];
$alamat = $_POST['alamat'];

$order = new Order($id_resto, $id_pesanan, $jumlah, $total, $bayar, $alamat);
$order->pesan();
header("Location: ../index.php");