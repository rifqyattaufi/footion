<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuk! Donasi untuk sesama</title>
    <link rel="stylesheet" href="css/donation.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="img/logo.png" class="column">
            <p class="titletext">Bersama Footion, Mari Berdonasi Untuk Sesama<br></p>
        </div>
        <div class="formm">
            <form action="php/prosesDonation.php" class="formd" method="POST">
        <label for="nama">Nama Pendonasi: </Label><br>
            <input type="text" name="namadonatur"
            placeholder="John Doe" required><br><br>
        <label for="mail">E-Mail: (Resi pembayaran akan dikirimkan melalui E-Mail)</label><br>
            <input type="email" 
            placeholder="nama@email.com" required name="emailform"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
            title="Masukkan Format Email dengan benar"><br><br>
            <label for="feedback">Pesan untuk penerima:</label><br>
            <textarea placeholder="Wahai penerima, semoga bermanfaat ya :)" name="feedback"></textarea><br><br>
        <label for="nohp">Nomor Handphone:</label><br>
            <select name="regcode" id="regcode" > 
                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                <option data-countryCode="US" value="1">USA (+1)</option>
            </select>           
            <input type="text"  name="nohp" pattern=".{8,}" required
            placeholder="81234567890"><br><br>
        <label for="jumdonasi">Jumlah Donasi: (Min Rp10.000 dalam Satuan IDR)</label><br>
            <input type="number"  name="jumlahdonasi" required
            placeholder="Rp.100.000,00,-" min="10000"
            title="Tolong masukkan jumlah dengan benar"><br><br>
        <label for="paymeth">Metode Pembayaran: </label><br>
            <select name="paymeth" id="paymeth" >
                <option value="bca">Bank BCA</option>
                <option value="bni">Bank BNI</option>
                <option value="danamon">Bank Danamon</option>
                <option value="bri">Bank BRI</option>
                <option value="mandiri">Bank Mandiri</option>
                <option value="gopay">GoPay</option>
                <option value="dana">DANA</option>
                <option value="kredivo">Kredivo</option>
                <option value="akulaku">Akulaku</option>
                <option value="OVO">OVO</option>
                <option value="spay">ShopeePay</option>
                <option value="LinkAJA">LinkAJA</option>
            </select><br><br><br>
        <input type="submit" name="submitbtn" value="KIRIM!">
        </form>
        </div>
    </div>
</body>
</html>