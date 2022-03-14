<?php
session_start();
    include("dbconnection.php");
//     $var = $_POST['mycart'];
//     echo "<br>";

    $sql = "SELECT * FROM users";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    $u_name = $_POST['uname'];
    $umail = $_POST['uid'];
    $u_dob = $_POST['udob'];
    $uphone = (int)$_POST['u_phone'];
    $upass = $_POST['pwd'];

    $sql_insert = "INSERT INTO `users`(`user_id`, `name`, `email`, `dob`, `phone`, `password`) VALUES (0,' $u_name','$umail','$u_dob',$uphone,'$upass')";
    $result_insert = $connect->query($sql_insert);

    if(!$result_insert){
          echo mysqli_error($connect);
          header('location: error.php');
          }
    else{
        $_SESSION['logged_in'] = "TRUE";
        header('location: login_form.php');
        $_SESSION['name_of_the_user'] = $userid;

//         echo "SUCCESS";
      }
?>