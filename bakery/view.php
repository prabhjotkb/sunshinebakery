<html>
	<head><title>Viewing the Record</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div class="container">
	<?php include 'header.php'?>
		<center><font color='red' size='6'><?php echo @$_GET['delete'];?>
		<?php /*echo @$_GET['updated']; ?><?php echo @$_GET['logged']; */?>
			</font></center>
		<a href="logout.php">Logout</a>
		<br><br><table align="center" width='900' border='4'>
			<tr>
			
					<th colspan="20" align="center" bgcolor="yellow"><h1>Viewing all the record</h1></th>
				
			</tr>
			<tr align="center">
				<td>id</td>
				<td>Customer Name</td>
				<td>Phone Number</td>
				<td>Pick-up Date</td>
				<td>Product Ordered</td>
				<td>Product Quantity</td>
			</tr>
	
			<?php
			
			include('config.php');
			$sqlselect="SELECT * FROM dbo.sunbakery1";
			$getResults= sqlsrv_query($conn, $sqlselect);
				
				$i=1;
		
		while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
			{
			 $customername = $row['customername'];
			 $phonenumber=$row['phonenumber'];
			 $pickupdate=$row['pickupdate'];
			 $productordered=$row['productordered'];
			 $productquantity=$row['productquantity'];
			
			
			
			//echo ($row['id'] . " " . $row['username']. . PHP_EOL);
			
				
					
			?>
				<tr align="center">
				<td><?php echo $i;$i++; ?></td>
				<td><?php echo $customername; ?></td>
				<td><?php echo $phonenumber; ?></td>
				<td><?php echo $pickupdate; ?></td>
				<td><?php echo $productordered; ?></td>
				<td><?php echo $productquantity; ?></td>
				<td><a href ='delete.php?del=<?php echo $id; ?>'>Delete</a></td>
				<td><a href='edit.php?edit=<?php echo $id ?>'>Edit</a></td>
				<td><a href='view.php?detail=<?php echo $id?>'>Detail</a></td>
				
					</tr>
			<?php } ?>
		</table>
		<?php include 'footer.php'?>
		<div>
	</body>
</html>
