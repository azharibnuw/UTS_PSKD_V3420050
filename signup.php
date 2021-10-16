<?php

require 'connect.php';
require 'cipher.php';
if($_POST['register']){
    $nisn	    = $_POST['nisn'];
	$nama	    = $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
    $ciphertext = Encipher($password, 3);
    $plain      = Decipher($ciphertext, 3);
    $passwordd  =sha1($plain);
    $alamat	    = $_POST['alamat'];
	$insert = mysqli_query($mysqli,"INSERT INTO akun VALUES('$nisn', '$nama', '$username', '$passwordd', '$alamat')"); 
}

?>