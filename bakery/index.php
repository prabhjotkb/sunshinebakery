<?php
include('config.php');
 
 if (isset($_POST['submit']))
 {
 $customername=$_POST['customername'];
 $phonenumber=$_POST['phonenumber'];
 $pickupdate=$_POST['pickupdate'];
 $productordered=$_POST['productordered'];
 $productquantity=$_POST['productquantity'];
 
 if($customername=='')
 {
	echo "<script>window.open('index.php?customername=customer name is required','_self');</script>";
	exit();
 }
 if($phonenumber=='')
 {
	echo "<script>window.open('index.php?phonenumber=phone number is required','_self');</script>";
	exit();
 }
if($pickupdate=='')
 {
	echo "<script>window.open('index.php?pickupdate=pick-up date is required','_self');</script>";
	exit();
 }
if($productordered=='null')
 {
	echo "<script>window.open('index.php?productordered=product ordered is required','_self');</script>";
	exit();
 }
if($productquantity=='')
 {
	echo "<script>window.open('index.php?productquantity=product quantity is required','_self');</script>";
	exit();
 }

	 
	 $tsql="insert into dbo.sunbakery1 (customername, phonenumber, pickupdate, productordered, productquantity)values('$customername', '$phonenumber', '$pickupdate','$productordered','$productquantity')";
$getResults= sqlsrv_query($conn, $tsql);
	 


//if($conn->query($que)=== true)
//{
	echo "<center><b><font color='white'>The follwing Data has been inserted into our databse</b></center>";

//}
}
?>

<html>
	<head>
		<title>Bakery Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	
		<form method="POST" action="index.php">
			
			<table  border="0" align="center">
				<tr>	
					<th colspan="6"><h1>Order Form</h1></th>
				</tr>
				<tr >
					<td align="right"><label>Customer Name:</label></td>
					<td><input type="text" name="customername"><font color="red"><?php echo @$_GET['customername']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Phone Number:</label></td>
					<td><input type="text" name="phonenumber"><font color="red"><?php echo @$_GET['phonenumber']; ?></font></td>
				</tr >
				<tr>
					<td align="right"><label>Pick-Up Date:</label></td>
					<td><input type="date" name="pickupdate"><font color="red"><?php echo @$_GET['pickupdate']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Product Ordered</label></td>
					<td><select name="productordered">
    
                <option>Select your product</option>
                <option>Cakes</option>
                <option>Cupcakes</option>
                <option>Paneer Patties</option>
                <option>Allu Patties</option>
                <option>Chocolate Pasteries</option>
                <option>Pineapple Pasteries</option>
                <option>Bakery Biscuits</option>
					</select><font color="red"><?php echo @$_GET['productordered']; ?></font></td>
				</tr>
                <tr >
					<td align="right"><label>Product Quantity</label></td>
					<td><input type="text" name="productquantity"><font color="red"><?php echo @$_GET['productquantity']; ?></font></td>
				</tr>
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Submit" name="submit"></td>
				</tr>
			</table>
			
		</form>
        </div>
	</body>
</html>
