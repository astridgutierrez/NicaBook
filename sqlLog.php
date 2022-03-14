<?php
    include("dbconnection.php");
	$userid = $_POST['uid'];
	$password = $_POST['pwd'];

	echo $userid."<br>";
	echo $password."<br>";

	$sql = "SELECT * FROM users WHERE email='$userid' AND password='$password'";
	$result = $connect->query($sql);

	$row = $result->fetch_assoc();

	if($row != NULL)
	{
		echo "Authentication Successful";
		header('location: homepage.php');
		$_SESSION['username'] = $userid;
    }
	else
	{
		echo "Authentication Failed";
		header('location: error.php');
	}
?>