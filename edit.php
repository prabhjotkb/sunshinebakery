<?php
	include('config.php');
	$edit_record=$_GET['edit'];
        $query="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_record'";

	$getResults=sqlsrv_query($conn, $query);
       //echo $getResults;
	while($row=sqlsrv_fetch_array( $getResults, SQLSRV_FETCH_ASSOC))
	{
   	 $edit_id = $row['id'];
   	 $customername=$row['customername'];
	$phonenumber=$row['phonenumber'];
	$pickupdate=$row['pickupdate'];	
   	$productordered=$row['productordered'];
   	$productquantity=$row['productquantity'];
	}

?>
<html>
	<head>
		<title>Updating Bakery's Record</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
		<form method="POST" action="edit.php?edit_form=<?php echo $edit_id;?>">
	
			<table width="500" border="0" align="center">
				<tr>	
					<th colspan="4"><h1>Updating Form</h1></th>
				</tr>
				<tr >
					<td align="right">Customer Name</td>
					<td><input type="text" name="customername1" value="<?php echo $customername; ?>"></td>
				</tr>
				<tr >
				<td align="right">Phone Number</td>
				<td><input type="text" name="phonenumber1" value="<?php echo $phonenumber;?>"></td>
			</tr>
            <tr> 
				<td align="right">Pick-Up Date</td>
				<td><input type="date" name="pickupdate1" value="<?php echo $pickupdate;?>"></td>
			</tr>
            <tr >
					<td align="right">Product Ordered</td>
					<td><select name="productordered1">
						<option value='<?php echo $productordered; ?>'><?php echo $productordered; ?></option>
						<option>Cakes</option>
                <option>Cupcakes</option>
                <option>Paneer Patties</option>
                <option>Allu Patties</option>
                <option>Chocolate Pasteries</option>
                <option>Pineapple Pasteries</option>
                <option>Bakery Biscuits</option>
					</select></td>
				</tr>
            <tr> 
				<td align="right">Product Quantity</td>
				<td><input type="text" name="productquantity1" value="<?php echo $productquantity;?>"></td>
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
		
		$customer_name = $_POST['customername1'];
    		$phone_number = $_POST['phonenumber1'];
    		$pickup_date = $_POST['pickupdate1'];
    		$product_ordered = $_POST['productordered1'];
    		$product_quantity = $_POST['productquantity1'];
	  	
	  	
		$query2="UPDATE dbo.sunbakery1 SET customername='$customer_name', phonenumber='$phone_number', pickupdate='$pickup_date',productordered='$product_ordered', productquantity='$product_quantity' WHERE id='$edit_record1'";
		//Update dbo.u_reg set username='anjana',fname='vishkarma',rollno='1111'where rollno='123456';
		$getResults1=sqlsrv_query($conn, $query2);
		
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


