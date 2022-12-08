<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Driver Form</title>
</head>
<body>
    <h1>Register Driver Form</h1>
    <form action="registrasiDriver.html" method="POST">
        <label>Nama Lengkap</label>
        <input type="text" name="nama">
        <br>

        <label>Email</label>
        <input type="email" name="email">
        <br>

        <label>Tanggal Lahir</label>
        <input type="date" name="ttl">
        <br>
        <br>

        <label>Jenis Kelamin</label>
        <br>
        <label>Laki - Laki</label>
        <input type="radio" name="gender" >
        <label>Perempuan</label>
        <input type="radio" name="gender">
        <br>
        <br>

        <label>Tipe Motor</label>
        <select name="motor">
            <option>Manual</option>
            <option>Kopling</option>
        </select>
        <br>

        <label>Foto Sim & KTP: </label>
        <input type="file" accept="image/png, image/jpeg" name="foto">
        <br>

        <label>Password</label>
        <input type="password" name="password">
        <br>

        <label>Ulangi Password</label>
        <input type="password" name="rePassword">
        <br>
        <button type="submit" name="submit">Register</button>
    </form>
</body>
</html>