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
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                       	<td>Password</td>
                        <td>Mobile Number</td>
			<td>Edit</td>
                        <td>Delete</td>
			
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
				<tr align="center">
				<td><?php echo $i;$i++; ?></td>
				<td><?php echo $name_; ?></td>
				<td><?php echo $email; ?></td>
				 <td><?php echo $pass; ?></td>
			   <td><?php echo $number; ?></td>
			    	<td><a href ='delete1.php?del=<?php echo $email; ?>'>Delete</a></td>
				<td><a href='edit1.php?edit=<?php echo $id; ?>'>Edit</a></td>
			 <?php } ?> 
                        </table>
				</form>
	</div>		
</body>
</html>
