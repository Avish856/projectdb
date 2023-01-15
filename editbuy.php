<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `buy` where P_ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>PURCHASE</title>
<style>
body{
    background-image: linear-gradient(to right, #8360c3, #2ebf91);
	}
</style>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updatebuy.php?id=<?php echo $id; ?>">
		<label>C_ID</label><input type="text" value="<?php echo $row['C_ID']; ?>" name="C_ID">
		<label>B_QTY</label><input type="text" value="<?php echo $row['B_QTY']; ?>" name="B_QTY">
        <label>B_DATE</label><input type="date" value="<?php echo $row['B_DATE']; ?>" name="B_DATE">
        
		<input type="submit" name="submit">
		<a href="buy.php">Back</a>
	</form>
</body>
<html>