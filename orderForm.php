<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/order.css">
    <title>Order Form</title>
</head>
<body>
    <div class="kotak">
        <div class="judul">
            <img src="img/logo.png" class="coloumn">
            <p class="coloumn">Bersama Footion, Mari Berdonasi Untuk Sesama!</p>
        </div>
        <form action="php/prosesOrder.php" method="POST" id="order">
            <h1><center>Order Form</center></h1>
            <p>Lengkapi form dibawah ini untuk melanjutkan transaksi!</p>
            <label for="cariresto">Nama Restoran: </label><br>
            <select name="resto" id="resto">
                <option value="kfc" >KFC</option>
                <option value="mcd">MCD</option>
                <option value="richeese">Richeese</option>
                <option value="a&w">A&W</option>
                <option value="hisana">Hisana</option>
                <option value="albaik">Albaik</option>
            </select>
            <br>
            <br>
        <label for="pilih makanan">Makanan yang dipesan: </label><br>
            <div class="row">
                <div class="column">
                    <input type="checkbox" name="makanan" value="nasi">
                    <label>Nasi</label>
                </div>
                <div class="column">
                    <input type="checkbox" name="makanan" value="Ayam">
                    <label>Ayam</label>
                </div>
                <div class="column">
                    <input type="checkbox" name="makanan" value="kentang">
                    <label>French Fries</label>
                </div>
                <div class="column">
                    <input type="checkbox" name="makanan" value="burger">
                    <label>Burger</label>
                </div>
                <div class="column">
                    <input type="checkbox" name="makanan" value="soup">
                    <label>Cream Soup</label>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <input type="checkbox" name="minuman" value="sundae">
                    <label>Sundae</label>
                </div>
                <div class="column">
                    <input type="checkbox" name="minuman" value="float">
                    <label>Float</label>
                </div>
                <div class="column">
                    <input type="checkbox" name="minuman" value="cola">
                    <label>Cola</label>
                </div>
                <div class="column">
                    <input type="checkbox" name="minuman" value="mineral">
                    <label>Air mineral</label>
                </div>
            </div>
                <br>
                <label for="jumlah">Jumlah makanan: </label><br>
                <input type="number" name="jumlahmakanan"><br><br>
                <label for="total">Total pesanan: </label><br>
                <input type="number" name="totalpesanan"><br><br>
                <label for="metodebayar">Metode Pembayaran: </label><br>
                <select name="metodebayar">
                    <option value="dana">DANA</option>
                    <option value="linkaja">LinkAja</option>
                    <option value="gopay">Gopay</option>
                    <option value="mbanking">MBanking</option>
                    <option value="qris">QRIS</option>
                </select>
                <br>
                <br>
            <label for="alamat">Alamat Tujuan: </label><br>
            <textarea name="alamat" id="alamat" cols="40" rows="10"></textarea>
            <br>
            <label for="submit"></label><br>
            <input type="submit" name="submit" id="submit" class="tombol"><br>
        </form>
    </div>
    <!-- <script src="javascript/Main.js"></script> -->
    </body>
    </html>