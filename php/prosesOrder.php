<?php
require("../phpclass/Order.php");
$id_resto = $_POST['idresto'];
$id_pesanan = $_POST['idpesanan'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];
$bayar = $_POST['bayar'];
$alamat = $_POST['alamat'];

$order = new Order($id_resto, $id_pesanan, $jumlah, $total, $bayar, $alamat);
$order->pesan();
header("Location: ../index.php");