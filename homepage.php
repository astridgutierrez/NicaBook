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
    <link rel="stylesheet" href="bookstyle.css">
    <meta charset="UTF-8">
    <title>NicaBook</title>
    <script>
        function Add(product)
        {
        alert("Adding to cart");
        document.getElementById('cart').innerHTML+= product+"<br>";
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
<?php
//     session_start();
    if ($_SESSION['logged_in'] == 'FALSE'){
?>        <th><p class="menus"> <a id="GFG" href="login_form.php"> Login </a> </p></th>

        <th><p class="menus"> <a id="GFG" href="register.php"> Sign up </a> </p></th>
<?php }
    else if ($_SESSION['logged_in'] == 'TRUE') { ?>
         <th><p class="menus"> <a id="GFG" href="login_form.php" action="<?php $_SESSION['logged_in'] = 'FALSE'; ?>"> Log out </a> </p></th>
    <?php } ?>
    </tr>
</table>
<h2> Find your dream destination in Nicaragua </h2>
<!-- <img src="bgimg.jpg" width="10%" align="center"> -->
<table align="center" width="90%">
<tr><td width="40%">
 <p>Nicaragua, set between the Pacific Ocean and the Caribbean Sea, is a Central American nation known for its dramatic
  terrain of lakes, volcanoes and beaches. Vast Lake Managua and the iconic stratovolcano Momotombo sit north of the
  capital Managua. To its south is Granada, noted for its Spanish colonial architecture and an archipelago of navigable
   islets rich in tropical bird life.</p>
</td>

<td>
<div class="container">
  <div class="image-stack">
    <div class="image-stack__item image-stack__item--top">
      <img src="bgimg.jpg" alt="">
    </div>
    <div class="image-stack__item image-stack__item--bottom">
      <img src="bgimg2.jpg" alt="">
    </div>
  </div>

</div>
</td>
</table>

<br>
<div id= "cart" style="display: none;"> <div>
<?php
// }
//
// else{
//     header('location: error_login.php');
// }
 ?>

</body>
</html>