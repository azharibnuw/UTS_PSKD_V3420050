<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
        background: #FFE4E1;
    }
    .login{
        position: absolute;
        width: 400px;
        height: 400px;
        left: 580px;
        top: 140px;
        bottom: 80px;
        border: 2px solid #FA8072;
        border-radius: 50px;
        background: #FFFFFF;
    }
    h1{
        position: absolute;
        left: 490px;
    }
    h2 {
        position: absolute;
        width: 250px;
        height: 65px;
        left: 125px;
        top: 10px;
        font-size:50px;
        line-height: 69px;
        color: #FA8072;
    }
    .username{
        position: absolute;
        left: 45px;
        top: 130px;
        font-weight: bold;
    }
    .password{
        position: absolute;
        left: 45px;
        top: 180px;
        font-weight: bold;
    }
    .submit{
        position: absolute;
        left: 165px;
        top: 250px;
    }
    .signup{
        position: absolute;
        left: 170px;
        top: 330px;
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
    p{
        position: absolute;
        left: 130px;
        top: 305px;
    }
</style>
<body>
	<br/>
    <h1>Selamat Datang Siswa/i SMPN 1</h1>
	<div class="login">
        <h2>LOGIN</h2>
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div class="username">
				<label>Username : </label>
				<input type="text" name="username" id="username" placeholder="Masukkan Username" />
			</div>
			<div class="password">
				<label>Password : </label>
				<input type="password" name="password" id="password" placeholder="Masukkan Password" />
			</div>			
			<div class="submit">
				<input type="submit" value="Login" class="btn btn-outline-success">
			</div>
            <p>Belum Punya Akun?</p>
            <div class="signup">
            <a href="register.php">Sign Up</a>
            </div>
		</form>
	</div>
</body>
 
<script>
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>
</html>