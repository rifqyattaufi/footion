<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register Form</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="img/logo.png" class="column">
            <p class="column">Bersama Footion, Mari Berdonasi Untuk Sesama!</p>
        </div>
        <div class="form-group">
            <h1>Register Form</h1>
            <form action="php/prosesRegister.php" method="POST" name="registerForm" id="registerForm">
                <div class="form-control">
                    <label>Nama Lengkap</label>
                    <input type="text" name="namaLengkap" id="namaLengkap">
                </div>
                <div class="form-control">
                    <label>Email</label>
                    <input type="email" name="emailUser" id="emailUser">
                </div>
                <div class="form-control">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="ttlUser" id="ttlUser">
                </div>
                <label>Jenis Kelamin</label><br>
                <label>Laki - Laki</label>
                <input type="radio" name="gender" id="gender" value="Laki-Laki">
                <label>Perempuan</label>
                <input type="radio" name="gender" id="gender" value="Perempuan">
                <div class="form-control">
                    <label>Password</label>
                    <input type="password" name="pass" id="pass">
                </div>
                <div class="form-control">
                    <label>Ulangi Password</label>
                    <input type="password" name="repass" id="repass">
                </div>
                <br>
                <button name="submit" id="submit" type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
    <!-- <script src="javascript/Main.js"></script> -->
</body>

</html>