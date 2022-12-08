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
            <form action="registerForm.html" method="get">
                <div class="form-control">
                    <label>Nama Lengkap</label>
                    <input type="text" name="namalengkap">
                </div>
                <div class="form-control">
                    <label>Email</label>
                    <input type="email" name="emailuser">
                </div>
                <div class="form-control">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="ttluser">
                </div>
                <label>Jenis Kelamin</label><br>
                <label>Laki - Laki</label>
                <input type="radio" name="lk" >
                <label>Perempuan</label>
                <input type="radio" name="pr">
                <div class="form-control">
                    <label>Password</label>
                    <input type="password" name="pass">
                </div>
                <div class="form-control">
                    <label>Ulangi Password</label>
                    <input type="password" name="repass">
                </div>
                <br>
                <button name="submitbtn" type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>