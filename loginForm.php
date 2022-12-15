<!DOCTYPE html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="img/logo.png" class="column"> 
            <p class="column">Bersama Footion, Mari Berdonasi Untuk Sesama!</p>
        </div>
        <div class="form-group">
            <h1>Login</h1>
            <form action="/" method="get" id="login">
                <div class="form-control">
                    <label>Email: </label>
                    <br>
                    <input type="text" name="email" placeholder="example@email.com" autocomplete="off">
                </div>
                <div class="form-control">
                    <label>Password: </label>
                    <br>
                    <input type="password" name="password" autocomplete="off">
                </div>
                <a href="google.com" class="text">forgot password?</a>
                <br>
                <br>
                <button type="submit" class="btn" id="submit">Login</button>
            </form>
            <p class="text">don't have an account? <a href="registerForm.html" class="text">Register</a></p>
        </div>
    </div>
    <script src="javascript/Main.js"></script>
</body>