<!DOCTYPE html>
<html>
<head>
<title>FARMER</title>
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
		<form method="POST" action="addfarmer.php">
            <label>ID</label><input type="text" name="F_ID">
			<label>NAME</label><input type="text" name="F_NAME">
            <label>ADDRESS</label><input type="text" name="F_ADDRESS">
			<label>CONTACT</label><input type="number" name="F_CONTACT">
            <label>AGE</label><input type="number" name="F_AGE">
			<input type="submit" name="add">
		</form>
	</div>
	<a href="product.php" target="_self">
	<button class="button" type="button">PRODUCT</button></a>
	<br>
	<div>
		<table border=1>
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
					$query=mysqli_query($conn,"select * from `farmer`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['F_ID']; ?></td>
							<td><?php echo $row['F_NAME']; ?></td>
                            <td><?php echo $row['F_ADDRESS']; ?></td>
                            <td><?php echo $row['F_CONTACT']; ?></td>
                            <td><?php echo $row['F_AGE']; ?></td>
							<td>
								<a href="editfarmer.php?id=<?php echo $row['F_ID']; ?>">Update</a>
								<a href="deletefarmer.php?id=<?php echo $row['F_ID']; ?>">Delete</a>
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