<html>
<head>
	<title>sunshine bakery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            body
            {
                background-image: url(back.jpg);
            }
    </style>
</head>
    
<?php
//including the database connection file
include_once("sunshinebakery.php");

if(isset($_POST['Submit'])) {	
	$customername = $_POST['customername'];
	$phonenumber = $_POST['phonenumber'];
    $pickupdate = $_POST['pickupdate'];
    $productordered = $_POST['productordered'];
    $productquantity = $_POST['productquantity'];
        
		
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO sunshinebakery(customername, phonenumber, pickupdate, productordered, productquantity) VALUES(:customername, :phonenumber, :pickupdate, :productordered, :productquantity)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':customername', $customername);
		$query->bindparam(':phonenumber', $phonenumber);
        $query->bindparam(':pickupdate', $pickupdate);
        $query->bindparam(':productordered', $productordered);
        $query->bindparam(':productquantity', $productquantity);
		$query->execute();
		
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</html>