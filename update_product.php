<?php
session_start();
include("dbconnection.php");


    $pid = $_POST['d_id'];
    $pdesc = $_POST['d_desc'];
    $ppic = $_POST['d_pic'];
    $pcap = (int)$_POST['d_cap'];
    $pppn = (int)$_POST['d_ppn'];

    if(count($_FILES) > 0){
        if (is_uploaded_file($_FILES['d_pic']['tmp_name'])){
            $ppic = addslashes(file_get_contents($_FILES['d_pic']['tmp_name']));
        }
        }
        $sql_add = "UPDATE `products` SET `p_description`='$pdesc',`p_picture`='$ppic',`capacity`=$pcap,`price`=$pppn WHERE 'P_id' = $pid";
        $result_add = $connect->query($sql_add);

        if(!$result_add)
            echo mysqli_error($connect);
        else
            echo "SUCCESS";
?>