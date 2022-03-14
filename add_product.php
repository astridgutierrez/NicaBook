<?php
session_start();
include("dbconnection.php");

    $pname = $_POST['d_name'];
    $pcity = $_POST['d_city'];
    $pcounty = $_POST['d_county'];
    $pdesc = $_POST['d_desc'];
//     $ppic = $_POST['d_pic'];
    $pcap = (int)$_POST['d_cap'];
    $pppn = (int)$_POST['d_ppn'];

    if(count($_FILES) > 0){
        if (is_uploaded_file($_FILES['d_pic']['tmp_name'])){
            $ppic = addslashes(file_get_contents($_FILES['d_pic']['tmp_name']));
        }
        }
        $sql_add = "INSERT INTO `products`(`P_id`, `p_name`, `city`, `county`, `p_description`, `p_picture`, `capacity`, `price`) VALUES (0,'$pname','$pcity','$pcounty','$pdesc','$ppic',$pcap,$pppn)";
        $result_add = $connect->query($sql_add);

        if(!$result_add)
            echo mysqli_error($connect);
        else
            echo "SUCCESS";

?>