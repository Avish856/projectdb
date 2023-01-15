<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-image: linear-gradient(to right, #8360c3, #2ebf91);
	}
table, th, td {
    border: 1px solid black;
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
<a href="farmer.php" target="_self">
	<button class="button" type="button">back</button></a>
<?php
    include('conn.php');

//MySQL query goes here
$sql = "SELECT  consumer.C_CONTACT,consumer.C_NAME,consumer.C_ADDRESS,consumer.C_ID
FROM consumer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>ADDRESS</th>
    <th>CONTACT</th>
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["C_ID"]. "</td> 
        <td>" . $row["C_NAME"]. "</td> 
        <td>" . $row["C_ADDRESS"]. "</td> 
        <td>" . $row["C_CONTACT"]. "</td> 
        
        
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>