<!DOCTYPE html>
<html>
<head>
<title>CONUSMER</title>
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
		background-color:;
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
  left:550px;
  height: 40px;
  background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
	}
</style>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
            <label>ID</label><input type="text" name="C_ID">
			<label>NAME</label><input type="text" name="C_NAME">
            <label>ADDRESS</label><input type="text" name="C_ADDRESS">
			<label>CONTACT</label><input type="number" name="C_CONTACT">
            <label>AGE</label><input type="number" name="C_AGE">
			<input type="submit" name="add">
		</form>
	</div>
	<a href="productdisplay.php" target="_self">
	<button class="button" type=button>PRODUCT</button></a>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				<th>ADDRESS</th>
                <th>AGE</th>
                <th>CONTACT</th>
                <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `consumer`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['C_ID']; ?></td>
							<td><?php echo $row['C_NAME']; ?></td>
                            <td><?php echo $row['C_ADDRESS']; ?></td>
                            <td><?php echo $row['C_CONTACT']; ?></td>
                            <td><?php echo $row['C_AGE']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['C_ID']; ?>">Update</a>
								<a href="delete.php?id=<?php echo $row['C_ID']; ?>">Delete</a>
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