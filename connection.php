<?php


$sever = "localhost";
$username =	"root";
$password = "";
$dbname = "signup";

$con = mysqli_connect($sever, $username, $password, $dbname);

if ($con) {
	echo "connected";
}
else
{
	echo "query faild";
}

//start

$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `signupdata`(`name`, `email`, `phone`, `pass`) VALUES ('$name','$email','$phone','$pass')"


























?>