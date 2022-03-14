<?php
session_start();
    include("dbconnection.php");
	$userid = $_POST['uid'];
	$password = $_POST['pwd'];
	
	echo $userid."<br>";
	echo $password."<br>";

    $sql = "SELECT * FROM users WHERE email ='$userid' AND password ='$password'";
    	$result = $connect->query($sql);
    	$row = $result->fetch_assoc();

    	if($row != NULL)
    	{
    		echo "Authentication Successfull";

    		header('location: homepage.php');
     		$_SESSION['name_of_the_user'] = $userid;
     		$_SESSION['logged_in'] = 'TRUE';
    	}

	else
	{
		echo "Authentication Failed";
		header('location: error.php');
	}
?>