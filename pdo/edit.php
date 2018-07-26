<?php
// including the database connection file
include_once("sunshinebakery.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
    
	$customername=$_POST['customername'];
	$phonenumber=$_POST['phonenumber'];
	$pickupdate=$_POST['pickupdate'];	
    $productordered=$_POST['productordered'];
    $productquantity=$_POST['productquantity'];
	
	// checking empty fields
		if(empty($customername) || empty($phonenumber)|| empty($pickupdate)|| empty($productordered) || empty($productquantity)) {
				
		if(empty($customername)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($phonenumber)) {
			echo "<font color='red'>Phone number field is empty.</font><br/>";
		}
        if(empty($pickupdate)) {
			echo "<font color='red'>Pick-up Date field is empty.</font><br/>";
		}
        if(empty($productordered)) {
			echo "<font color='red'>Product Ordered field is empty.</font><br/>";
		}
        if(empty($productquantity)) {
			echo "<font color='red'>Product Quantity field is empty.</font><br/>";
		}
	} 
    else {	
		//updating the table
		$sql = "UPDATE sunshinebakery SET customername=:customername, phonenumber=:phonenumber, pickupdate=:pickupdate, productordered=:productordered, productquantity=:productquantity WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':customername', $customername);
		$query->bindparam(':phonenumber', $phonenumber);
        $query->bindparam(':pickupdate', $pickupdate);
        $query->bindparam(':productordered', $productordered);
        $query->bindparam(':productquantity', $productquantity);
		$query->execute();
		
        // Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':customername' => $customername, ':phonenumber' => $phonenumber, ':pickupdate' => $pickupdate, ':productordered' => $productordered, ':productquantity' => $productquantity));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM sunshinebakery WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$customername = $row['customername'];
    $phonenumber = $row['phonenumber'];
    $pickupdate = $row['pickupdate'];
    $productordered = $row['productordered'];
    $productquantity = $row['productquantity'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Customer Name</td>
				<td><input type="text" name="customername" value="<?php echo $customername;?>"></td>
			</tr>
			<tr> 
				<td>Phone Number</td>
				<td><input type="text" name="phonenumber" value="<?php echo $phonenumber;?>"></td>
			</tr>
            <tr> 
				<td>Pick-Up Date</td>
				<td><input type="date" name="pickupdate" value="<?php echo $pickupdate;?>"></td>
			</tr>
            <tr> 
				<td>Product Ordered</td>
				<td><input type="text" name="productordered" value="<?php echo $productordered;?>"></td>
			</tr>
            <tr> 
				<td>Product Quantity</td>
				<td><input type="text" name="productquantity" value="<?php echo $productquantity;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>