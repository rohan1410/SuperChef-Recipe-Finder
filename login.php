<?php
session_start();
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['pass'];

// $password=md5($password);

if(empty($email) || empty($password)){

	echo '<script type="text/javascript">alert("Please fill all the fields");</script>';

	echo '<script type="text/javascript">window.location="home.php/script>';

}


if($email && $password){

	$query=mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND password='$password'");

	$numrows=mysqli_num_rows($query);

	if($numrows!=0){

		$row=mysqli_fetch_array($query);

		$dbemail=$row['email'];

		$dbpassword=$row['password'];

	}


	if($email==$dbemail && $password==$dbpassword){

		header("location:loggedin.php");

		$_SESSION['loggedin'] = true;

		$_SESSION['name']=$row['username'];

		$_SESSION['email']=$row['email'];

		$_SESSION['password']=$row['password'];

		echo '<script type="text/javascript">alert("Login Successful");</script>';

		echo '<script type="text/javascript">window.location="loggedin.php";</script>';

	}


	else{

		echo '<script type="text/javascript">alert("Login Failed");</script>';

		echo '<script type="text/javascript">window.location="home.php";</script>';

	}

}

?>