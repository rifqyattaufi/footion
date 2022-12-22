<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Footion!</title>
</head>
<body>
    <header>
        <img src="img/logo.png" alt="">
    </header>
    <div class="container">
        <div class="row">
            <a href="donationForm.php">
            <div class="column">
                <img src="img/daontion.png" alt="" class="icon">
            </div>
            </a>
            <a href="kritikDanSaran.php">
            <div class="column">
                <img src="img/kritik.png" alt="" class="icon">
            </div>
            </a>
            <a href="registerForm.php">
            <div class="column">
                <img src="img/registrasi.png" alt="" class="regis">
            </div>
            </a>
        </div>
        <div class="row">
            <a href="loginForm.php">
            <div class="column">
                <img src="img/login.png" alt="" class="overflow">
            </div>
            </a>
            <a href="orderForm.php">
            <div class="column">
                <img src="img/order.png" alt="" class="icon">
            </div>
            </a>
            <a href="registrasiDriver.php">
            <div class="column">
                <img src="img/registrasi driver.png" alt="" class="overflow">
            </div>
            </a>
        </div>
    </div>

    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Email</td>
                <td>Nama</td>
                <td>Gender</td>
            </tr>
        </thead>
        <tbody>
        <?php
        require('phpclass/Customer.php');
        $no = 1;
        foreach(Customer::getCustomer() as $row){
            echo "
            <tr>
                <td>".$no."</td>
                <td>".$row['email']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['gender']."</td>
                </tr>";
                $no++;
        }
         ?>
        </tbody>
    </table>
    <footer>

    </footer>
    <script></script>
</body>
</html>