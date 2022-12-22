<?php
require("../phpclass/Review.php");
$nama = $_POST['nama'];
$id_pesanan = $_POST['nomorpesanan'];
$id_review = $_POST['idreview'];
$kritik = $_POST['kritikdansaran'];
$rating = $_POST['rating'];
$bukti = $_POST['buktiPesanan'];

$review = new Review($nama, $id_pesanan, $id_review, $kritik, $rating, $bukti);
$review->kritik();
header("Location: ../index.php");