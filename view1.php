<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
		<a href="index.html"><input type="button" name="HOME" value="home"></a>
	<br><br><br>
	<div class="container">
					
					  <table align="center" width='900' border='4'  bgcolor="yellow">
						  
			<tr>
			
					<th colspan="20" align="center"><h1>Viewing all the record</h1></th>
				
			</tr>
		<tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                       	<th>Password</th>
                        <th>Mobile Number</th>
			<th>Edit</th>
                        <th>Delete</th>
			
		 </tr>
			    <?php
			
			include('config.php');
			$sqlselect="SELECT * FROM dbo.log_u";
			$getResults= sqlsrv_query($conn, $sqlselect);
				
				$i=1;
		
		while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) 
			{
			$id=$row['u_id'];
			 $name_ = $row['Name_'];
			$email = $row['Email_'];
			$pass=$row['Password_'];
			$number = $row['Number_'];
			?>
				
				<th><?php echo $i;$i++; ?></th>
				<th><?php echo $name_; ?></th>
				<th><?php echo $email; ?></th>
				 <th><?php echo $pass; ?></th>
			   <th><?php echo $number; ?></th>
			    	<th><a href ='delete1.php?del=<?php echo $email; ?>'>Delete</a></th>
				<th><a href='edit1.php?edit=<?php echo $id; ?>'>Edit</a></th>
			 <?php } ?> 
                        </table>
				</form>
	</div>		
</body>
</html>
