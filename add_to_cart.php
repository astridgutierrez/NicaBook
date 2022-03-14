<!DOCTYPE html>
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

<h2> Complete Reservation </h2>

<table align="center"  width="70%">
<tr><td>
<form method="post" action="add_reservation.php" enctype="multipart/form-data">
<?php
session_start();
    include("dbconnection.php");
    $var = $_POST['mycart'];
    $_SESSION['id'] = $var;
 ?>
<table align="center" width="80%" border=0  cellpadding=15px>
            <tr><td> Number of guests: </td> <td> <input name="d_guest_qty" id="d_guest_qty" /><br> </td>
            <tr><td> Check-in: </td> <td><input name="d_cin" type="date" id="d_cin" /><br> </td>
            <tr><td> Check-out: </td> <td><input name="d_cout" type="date" id="d_cout" /><br> </td>
           <!-- <tr><td> Number of nights: </td> <td><input name="ppnn" id="ppnn" /><br> </td> -->
            <tr><td colspan=2 align=center><input type="submit" value="Book destination" /> </td>
</table>
</form>
</td>
<td>

<?php
echo "<br>";
    $sql = "SELECT * FROM products WHERE P_id='$var'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
?>
    <td> <center> <h3> <?php echo $row['p_name']."<br>"; ?> </h3>
    <?php
    echo "Price per night: $".$row['price']."<br><br>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['p_picture'] ).'"/>'.'<br>';
    echo $row['p_description'];
    echo "<br>";
?>
</td>
</table>
</body>
</html>