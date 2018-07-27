<?php
	include('config.php');
	
	$edit_record=$_GET['id'];
	$query1="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_record'";
	$getResults= sqlsrv_query($conn,$query1);


	while($row=sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
	{
   	 $id = $_POST['id'];
   	 $customername=$_POST['customername'];
	$phonenumber=$_POST['phonenumber'];
	$pickupdate=$_POST['pickupdate'];	
   	$productordered=$_POST['productordered'];
   	$productquantity=$_POST['productquantity'];
	}
?>

<html>
	<head>
		<title>Updating Bakery's Record</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
		<form method="POST" action="edit.php?edit_form=<?php echo $id;?>">
			<table width="500" border="0" align="center">
				<tr>	
					<th colspan="4"><h1>Updating Form</h1></th>
				</tr>
				<tr >
					<td align="right">Customer Name</td>
					<td><input type="text" name="customername" value='<?php echo $customername; ?>'></td>
				</tr>
				<tr >
				<td align="right">Phone Number</td>
				<td><input type="text" name="phonenumber" value="<?php echo $phonenumber;?>"></td>
			</tr>
            <tr> 
				<td align="right">Pick-Up Date</td>
				<td><input type="date" name="pickupdate" value="<?php echo $pickupdate;?>"></td>
			</tr>
            <tr> 
				<td align="right">Product Ordered</td>
				<td><input type="text" name="productordered" value="<?php echo $productordered;?>">
                    <select>
                    <option>Select your product</option>
                <option>Cakes</option>
                <option>Cupcakes</option>
                <option>Paneer Patties</option>
                <option>Allu Patties</option>
                <option>Chocolate Pasteries</option>
                <option>Pineapple Pasteries</option>
                <option>Bakery Biscuits</option>
                </select>
                </td>
			</tr>
            <tr> 
				<td align="right">Product Quantity</td>
				<td><input type="text" name="productquantity" value="<?php echo $productquantity;?>"></td>
			</tr>
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Update" name="update"></td>
				</tr>
			</table>
			
		</form>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['update'])){
	
		$edit_record1 = $_GET['edit_form'];
		
		$customername = $row['customername1'];
    		$phonenumber = $row['phonenumber1'];
    		$pickupdate = $row['pickupdate1'];
    		$productordered = $row['productordered1'];
    		$productquantity = $row['productquantity1'];
		
		$query2="UPDATE dbo.sunbakery1 SET customername='$customername',phonenumber='$phonenumber',pickupdate='$pickupdate', 
		productordered='$productordered', 'productquantity='$productquantity' WHERE id='$edit_record1'";
		//Update dbo.u_reg set username='anjana',fname='vishkarma',rollno='1111'where rollno='123456';
		$getResult1=sqlsrv_query($conn, $query2);
		
		echo "<script>";
        	echo "window.alert('Data Updated')
		window.location.href='view.php';
		</script>";
		
		/*if(mysql_query($query1))
		{
			echo "<script>window.open('view.php?updated=Record has been updated..!','_self')</script>";
		}*/
	}
?>
