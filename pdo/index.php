<?php
//including the database connection file
include_once("sunshinebakery.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM sunshinebakery ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Customer Name</td>
		<td>Phone Number</td>
        <td>Pick-Up Date</td>
        <td>Product Ordered</td>
		<td>Product Quantity</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['customername']."</td>";
		echo "<td>".$row['phonenumber']."</td>";
		echo "<td>".$row['pickupdate']."</td>";
        echo "<td>".$row['productordered']."</td>";
        echo "<td>".$row['productquantity']."</td>";
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>