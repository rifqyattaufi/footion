<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/kritikSaran.css">
    <title>Kritik & Saran</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="img/logo.png" class="column"> 
            <p class="column">Bersama Footion, Mari Berdonasi Untuk Sesama!</p>
        </div>
        <div class="form-group">
            <h1>Kritik & Saran</h1>
            <form action="kritikDanSaran.html" method="get">
                <div class="form-control">
                    <label>
                        ID pesanan: <input type="text" name="idPesanan" value="1203919203" disabled size="40">
                    </label>
                </div>
                <div class="form-control">
                    <label>
                        Nama: <input type="text" name="nama" value="Ahmad Zufar" disabled size="40">
                    </label>
                </div>
                <div class="form-control">
                    <label>Kritik & Saran: </label>
                    <br>
                    <textarea name="kritikSaran" id="kritikSaran" cols="30" rows="10" required></textarea>
                </div>
                <label>Rating: </label>
                <br>
                <input type="radio" name="rating" id="rating" value="1" required> 1
                <input type="radio" name="rating" id="rating" value="2"> 2
                <input type="radio" name="rating" id="rating" value="3"> 3
                <input type="radio" name="rating" id="rating" value="4"> 4
                <input type="radio" name="rating" id="rating" value="5"> 5
                <br>
                <br>
                <div class="form-control">                    
                    <label>Bukti Foto: </label>
                    <input type="file" accept="image/png, image/jpeg" name="foto" required class="input-img">
                </div>
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>