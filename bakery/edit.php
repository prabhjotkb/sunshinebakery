<?php
	include('config.php');
	$edit_id=$_GET['edit'];
        $query="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_id'";

	//$query="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_record'";
	$getResults=sqlsrv_query($conn, $query);
       //echo $getResults;
	while($row=sqlsrv_fetch_array( $getResults, SQLSRV_FETCH_ASSOC))
	{
   	 $id = $_POST['id'];
   	 $customername=$_POST['customername'];
	$phonenumber=$_POST['phonenumber'];
	$pickupdate=$_POST['pickupdate'];	
   	$productordered=$_POST['productordered'];
   	$productquantity=$_POST['productquantity'];
	}
echo $customername;
?>

