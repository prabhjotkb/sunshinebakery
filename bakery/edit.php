<?php
	include('config.php');
	$edit_id=$_GET['edit'];
        $query="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_id'";

	//$query="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_record'";
	$getResults=sqlsrv_query($conn, $query);
       //echo $getResults;
	$row=sqlsrv_fetch_array( $getResults, SQLSRV_FETCH_ASSOC)
	
   	 $id = $row['id'];
   	 $customername=$row['customername'];
	$phonenumber=$row['phonenumber'];
	$pickupdate=$row['pickupdate'];	
   	$productordered=$row['productordered'];
   	$productquantity=$row['productquantity'];
	
echo $customername;
?>

