<html>
    <?php
        require 'signup.php';
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    body{
        background: #FFE4E1;
    }
    .register{
        position: absolute;
        width: 400px;
        height: 600px;
        left: 580px;
        top: 40px;
        bottom: 80px;
        border: 2px solid #FA8072;
        border-radius: 50px;
        background: #FFFFFF;
    }
    h2 {
        position: absolute;
        width: 250px;
        height: 65px;
        left: 115px;
        top: 10px;
        font-size:50px;
        line-height: 69px;
        color: #FA8072;
    }
    .nisn{
        position: absolute;
        left: 45px;
        top: 130px;
        font-weight: bold;
    }
    .nama{
        position: absolute;
        left: 45px;
        top: 180px;
        font-weight: bold;
    }
    .username{
        position: absolute;
        left: 45px;
        top: 230px;
        font-weight: bold;
    }
    .password{
        position: absolute;
        left: 45px;
        top: 280px;
        font-weight: bold;
    }
    .alamat{
        position: absolute;
        left: 45px;
        top: 330px;
        font-weight: bold;
    }
    input[type=text] {
        width: 241px;
        border: hidden;
        border-radius: 5px;
        background: #FFF0F5;
    }
    input[type=password] {
        width: 241px;
        border: hidden;
        border-radius: 5px;
        background: #FFF0F5;
    }
    .submit{
        position: absolute;
        left: 160px;
        top: 400px;
    }
    p{
        position: absolute;
        left: 135px;
        top: 450px;
    }
    .login{
        position: absolute;
        left: 180px;
        top: 470px;
    }
</style>
<body>
    <div class="register"> 
        <form action="" method="post"
            <fieldset>
            <h2> Sign Up</h2>
            <div class="nisn">
                <label>NISN : </label>
                <input type="text" name="nisn"><br><br>
            </div>
            <div class="nama">
                <label>Nama : </label>
                <input type="text" name="nama"><br><br>
            </div>
            <div class="username">
                <label>Username : </label>
                <input type="text" name="username"><br><br>
            </div>
            <div class="password">
                <label>Password : </label>
                <input type="password" name="password"><br><br>
            </div>
            <div class="alamat">
                <label>Alamat : </label>
                <input type="text" name="alamat"><br><br>
            </div>
            <div class="submit">
                <input type="submit" value="Sign Up" name="register" class="btn btn-outline-primary"><br><br>
            </div>
            <p>Sudah Punya Akun?</p>
            <div class="login">
            <a href="index.php">Login</a>
            </div>
            </fieldset>
        </form>
    </div>
</body>
</html>