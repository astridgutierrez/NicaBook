<!DOCTYPE html>
<html>
<head>
    <script>
        function updateproduct(x)
        {
            document.getElementById('P_id').value=x;
            document.update_form.submit();
        }

    </script>
</head>
<style>
body{
	margin: 60px;
}
</style>
<body>

	<br>
	<br>
    <h2> Booking destinations inventory </h2>
        <h3> Add new destination to database: </h3>

	<form method="post" action="add_product.php" enctype="multipart/form-data">
        <table align="center" width="50%" border=1  cellpadding=20px>
            <tr><td> Name: <input name="d_name" id="d_name"/><br> </td>
            <tr><td> City name: <input name="d_city" id="d_city" /><br> </td>
            <tr><td> County name: <input name="d_county" id="d_county" /><br> </td>
            <tr><td> Description: <textarea name="d_desc" id="d_desc"></textarea><br> </td>
            <tr><td> Picture: <input type="file" name="d_pic" id="d_pic" /><br> </td>
            <tr><td> Guest capacity: <input name="d_cap" id="d_cap" /><br> </td>
            <tr><td> Price per night: <input name="d_ppn" id="d_ppn" /><br> </td>
            <tr><td colspan=2 align=center> <input type="submit" value="Add to database" /> </td>
        </table>
	</form>

	<br>
	<br>

	<h3> Destinations stored in database: </h3>
	<?php
	    include("dbconnection.php");
	    $sql = "SELECT * FROM products";
        $result = $connect -> query($sql);
        $count=1;
	?>



	<table width="70%" border=1 align="center" cellpadding="20px">
    <tr>
	<?php while($row = $result->fetch_assoc())
	{
	?>

	<td align="center" width="25%"> <?php echo $row['P_id'];?> </td>
	<td><?php echo $row['p_name']."<br>"; ?> </td>
	<td><?php echo $row['city']."<br>"; ?> </td>
	<td><?php echo $row['county']."<br>"; ?> </td>
	<td><?php echo $row['p_description']."<br>"; ?> </td>

	<td><?php echo $row['capacity']."<br>"; ?> </td>
	<td><?php echo $row['price']."<br>"; ?> </td>
    <td> <input type="button" value="Update the product" onclick="updateproduct('<?php echo $row['P_id']; ?>')" /> </td>
    <td> <input type="button" value="Delete the product" /> </td>
    </tr>

    <?php
    }
    ?>

	</table>

</body>
</html>