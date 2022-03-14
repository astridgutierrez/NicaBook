<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="nicabookLogo.png">
<link rel="stylesheet" href="login.css">

</head>
<body>
<table>
    <tr>
        <th> <img href="homepage.php" src="nicabookLogo.png" width="80%" alt="Italian Trulli"> </th>
 <!--       <th><p class="menus"> <a id="GFG" href="homepage.php"> Home </a></p></th> -->
    </tr>
</table>
<br>
	<form class="login" method="post" action="valLog.php">
		<h2>Sign in</h2>
		<input name="uid" id="uid" placeholder="Email" /><br><br>
		<input type="password" name="pwd" id="pwd" placeholder="Password" /><br><br>
		<input type="submit" value="Sign in" />
	</form>
</body>
</html>