<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="nicabookLogo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="login.css">
</head>
<body>
<table background-color: #000>
    <tr>
        <th> <img href="homepage.php" src="nicabookLogo.png" width="80%" alt="Italian Trulli"> </th>
<!--         <th><p class="menus"> <a id="GFG" href="homepage.php"> </a></p></th> -->
    </tr>
</table>
<br>
	<form class="login" method="post" action="add_user.php">
		<h3>Register</h3>
		Name <input name="uname" id="uname" placeholder="Name Surname"/><br>
		Email <input name="uid" id="uid" placeholder="name@mail.com" /><br>
		Birthday <input name="udob" id="udob" type="date"/><br>
		Phone number <input name="u_phone" id="u_phone" placeholder="2224449999" /><br>
		Password <input type="password" name="pwd" id="pwd" placeholder="*********" /><br><br>
		<input type="submit" value="Create account" />
	</form>
</body>
</html>