<!DOCTYPE html>
<?php
    session_start();
//     if ($_SESSION['logged_in'] == "TRUE"){
?>
<html lang="en">
<head>
    <style>
        #GFG {
            all: unset;
        }
    </style>
    <link rel="icon" href="nicabookLogo.png">
    <link rel="stylesheet" href="reserve.css">
    <meta charset="UTF-8">
    <title>NicaBook</title>
    <script>
        var prev_x = "0";
        function display_info(x)
        {
            document.getElementById(x).style.display="block";
            document.getElementById(prev_x).style.display="none";
            prev_x = x;
        }
        function Add(product)
        {
        alert("Adding to cart");
        document.getElementById('cart').innerHTML+= product+"<br>";
        }

        function ViewCart()
        {
        document.getElementById('cart').style.display="block";
        }

        function addToCart(x)
        {
//         alert("Item Added to Cart Successfully: " +x);
        document.getElementById('mycart').value = x;
        document.reserve_form.submit();
        }
    </script>
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

<h1 align="center"> Book your trip now! </h1>

<form name="reserve_form" method="post" action="add_to_cart.php">
<input type="hidden" name="mycart" id="mycart"/>
</form>
<div id="0" style="display: none"></div>

<?php
include ("dbconnection.php");

$sql = "SELECT * FROM products";
$result = $connect -> query($sql);
$count = 1;
?>
<table width="100%" >
<tr>
    <?php while ($row = $result->fetch_assoc()){
    ?>
        <td> <center> <h3> <?php echo $row['p_name']."<br>"; ?> </h3>
         <?php echo "Capacity: ".$row['capacity']." Guests <br>"; ?>
         <?php echo "Price: $".$row['price']."<br>"; ?>
         <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['p_picture'] ).'"/>'.'<br>'; ?>


         <input type="button" value="Reserve" onclick="addToCart(<?php echo $row['P_id']; ?>)"/>
         </td>
    <?php
        $count++;

    if($count > 3)
    {
        $count = 1;
        echo "</tr><tr>";
    }
    }
   ?>
</table>

<br>
<br>
<div id= "cart" style="display: none;"> <div>
<?php
// }
// else{
//     header('location: error_login.php');
// }
 ?>

</body>
</html>