<!DOCTYPE html>
<?php
session_start();
    include("dbconnection.php");
    $i_d =  $_SESSION['id'];
    echo "<br>";

    $sql = "SELECT * FROM products WHERE P_id='$i_d'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    $pname = $row['p_name'];
    $pprice = $row['price'];
    $qty = (int)$_POST['d_guest_qty'];
    $cindate = $_POST['d_cin'];
    $coutdate = $_POST['d_cout'];
    $user_id = $_SESSION['name_of_the_user'];

    $date1_ts = strtotime($cindate);
    $date2_ts = strtotime($coutdate);
    $diff = $date2_ts - $date1_ts;
    $difInDays = round($diff / 86400);

    $total_price = $pprice * $difInDays * $qty;
    $sql_insert = "INSERT INTO `cart_tab`(`id`, `user_id`, `P_id`, `p_name`, `guest_qty`, `in_date`, `out_date`, `n_nights`, `price`) VALUES (0,'$user_id','$i_d','$pname',$qty,'$cindate','$coutdate',$difInDays,$total_price)";
    $result_insert = $connect->query($sql_insert);

    if(!$result_insert)
       echo mysqli_error($connect);
?>
<html lang="en">
<head>
    <link rel="icon" href="nicabookLogo.png">
    <link rel="stylesheet" href="bookstyle.css">
    <meta charset="UTF-8">
    <title>Checkout</title>
    <style>
        #GFG {
            all: unset;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th> <img href="homepage.php" src="nicabookLogo.png" width="80%" alt="Italian Trulli"> </th>
        <th><p class="menus"> <a id="GFG" href="homepage.php"> Home </a></p></th>

        <th> <p class="menus"> <a id="GFG" href="home.php"> Reserve </a> </p></th>

        <th><p class="menus"> <a id="GFG" href="homepage.php" action="<?php $_SESSION['logged_in'] = 'FALSE'; ?>"> Log out </a> </p></th>
    </tr>
</table>
<br>

<h2 align="center"> Your trip to  <?php echo $pname; ?> has been booked! </h2>
<h3 align="center"> Your total was $<?php echo $total_price; ?> <br> Check your email for confirmation and completion of your payment. </h3>


</body>
</html>

