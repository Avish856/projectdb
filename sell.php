<!DOCTYPE html>
<html>
<head>
<title>SELL</title>
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
	.met{
		position:relative;
		left:300px;
	}
	.ok{
		position:relative;
		left:0px;
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
	<div >
		<form class="met"  method="POST" action="addsell.php">
            <label>F_ID</label><input type="text" name="F_ID">
			<label>P_ID</label><input type="text" name="P_ID">
            <label>S_DATE</label><input type="date" name="S_DATE">
			<input type="submit" name="add">
		</form>
	</div>
	<a href="farmer.php" target="_self">
	<button class="button" type="button">back</button></a>
	<br>
	<div class="ok">
		<table border="1">
			<thead>
				<th>F_ID</th>
				<th>P_ID</th>
				<th>S_DATE</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `sell`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['F_ID']; ?></td>
							<td><?php echo $row['P_ID']; ?></td>
                            <td><?php echo $row['S_DATE']; ?></td>
                           
							<td>
								<a href="editsell.php?id=<?php echo $row['F_ID']; ?>">Update</a>
								<a href="deletesell.php?id=<?php echo $row['F_ID']; ?>">Delete</a>
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