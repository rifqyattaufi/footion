<?php
require("../phpclass/Review.php");
$nama = $_POST['nama'];
$id_pesanan = $_POST['idPesanan'];
$kritik = $_POST['kritikSaran'];
$rating = $_POST['rating'];
$bukti = $_POST['foto'];

$review = new Review($nama, $id_pesanan, $kritik, $rating, $bukti);
$review->kritik();
header("Location: ../index.php");