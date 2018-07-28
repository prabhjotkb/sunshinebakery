<html>
	<head><title>Viewing the Record</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div class="container">
		<center><font color='red' size='6'><?php echo @$_GET['delete'];?>
		<?/*php echo @$_GET['updated']; ?> <?php echo @$_GET['logged']; */?>
		
			</font></center>
		<br><br><table align="center" width='900' border='4'  bgcolor="aquawhite">
			<tr>
			
					<th colspan="20" align="center"><h1>Viewing all the record</h1></th>
				
			</tr>
			<tr align="center">
				<td>Id</td>
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
			$id=$row['id'];
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
				<td><a href='edit.php?edit=<?php echo $id; ?>'>Edit</a></td>
				<td><a href ='delete.php?del=<?php echo $phonenumber; ?>'>Delete</a></td>
				
					</tr>
			<?php } ?>
		</table>
		</div>
	</body>
</html>
