<!DOCTYPE html>
<html>
<head>
<title>BUY</title>
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
	.bye{
		position: relative;
		left:150px;
		top:20px;
	}
	</style>
</head>
<body>
	<div>
		<form class="bye" method="POST" action="addbuy.php">
            <label>P_ID</label><input type="text" name="P_ID">
			<label>C_ID</label><input type="text" name="C_ID">
            <label>B_QTY</label><input type="text" name="B_QTY">
			<label>B_DATE</label><input type="date" name="B_DATE">
            
			<input type="submit" name="add">
		</form>
	</div>
	<a href="consumer.php" target="_self">
	<button class="button" type=button>back</button></a>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>P_ID</th>
				<th>C_ID</th>
				<th>B_QTY</th>
                <th>B_DATE</th>
               
                <th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `buy`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['P_ID']; ?></td>
							<td><?php echo $row['C_ID']; ?></td>
                            <td><?php echo $row['B_QTY']; ?></td>
                            <td><?php echo $row['B_DATE']; ?></td>
                           
							<td>
								<a href="editbuy.php?id=<?php echo $row['P_ID']; ?>">Update</a>
								<a href="deletebuy.php?id=<?php echo $row['P_ID']; ?>">Delete</a>
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