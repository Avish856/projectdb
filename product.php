<!DOCTYPE html>
<html>
<head>
<title>PRODUCT</title>
<style>
	body{
		background-image: linear-gradient(to right, #8360c3, #2ebf91);
	}
	table,th,td{
		border: 1px solid black;
		margin:auto;

	}
	td{
		background-color:white;
		width: 200px;
		height:30px;
	}
	th{
		
		width:200px;
		height:30px;
	}
	.button{
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position:relative;
  top:400px;
  left:500px;
  height: 40px;
  background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
	}
	</style>
</head>
<body>
	<div>
		<form method="POST" action="addproduct.php">
            <label>ID</label><input type="text" name="P_ID">
			<label>NAME</label><input type="text" name="P_NAME">
            <label>TYPE</label><input type="text" name="P_TYPE">
			<label>QUANTITY</label><input type="text" name="P_QTY">
            <label>PRICE</label><input type="number" name="P_PRICE">
			<input type="submit" name="add">
		</form>
	</div>
	<a href="sell.php" target="_self">
	<button class="button" type="button">SELL</button></a>
	<a href="consumerdisplay.php" target="_self">
	<button class="button" type="button">Customer details</button></a>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				<th>TYPE</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `product`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['P_ID']; ?></td>
							<td><?php echo $row['P_NAME']; ?></td>
                            <td><?php echo $row['P_TYPE']; ?></td>
                            <td><?php echo $row['P_QTY']; ?></td>
                            <td><?php echo $row['P_PRICE']; ?></td>
							<td>
								<a href="editproduct.php?id=<?php echo $row['P_ID']; ?>">Update</a>
								<a href="deleteproduct.php?id=<?php echo $row['P_ID']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>