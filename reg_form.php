<?php
session_start();
include 'conn.php';

$name=$_POST['username'];
$mail=$_POST['email1'];
$pass=$_POST['pass1'];

$sql = "SELECT * FROM user WHERE email='$mail'";
$result=mysqli_query($conn, $sql);
if($result->num_rows > 0)
{
	echo '<script type="text/javascript">alert("Email Arleady Exists");
	window.location="home.php";</script>';
}
else{
$sql = "INSERT INTO user (username,email,password) VALUES ('$name','$mail','$pass')";
$result=mysqli_query($conn, $sql);
$_SESSION['loggedin'] = true;

$_SESSION['name']=$name;
echo '<script type="text/javascript">window.location="loggedin.php";</script>';
}
// header("Location: login.html");
?>