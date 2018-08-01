<?php
	include('config.php');
	
$edit_record=$_GET['edit'];
	  $query1="SELECT * FROM dbo.log_u WHERE u_id='$edit_record'";
	$getResults= sqlsrv_query($conn,$query1);

	//echo $getResults;	

	while($row=sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
	{
		$id=$row['u_id'];
		$name_=$row['Name_'];
		$email=$row['Email_'];
		$uname=$row['Username_'];
		$pass=$row['Password_'];
		$confirm=$row['confirmpassword_'];
		$phone=$row['Number_'];
		$address=$row['Youraddress_'];
	}


?>

<!DOCTYPE html>
<html>
<head>
<title>Client Signup Form Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Client Signup Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="style.css" rel="stylesheet" type="text/css" media="all" />

<link href="//fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
				<form action="edit1.php?edit_form=<?php echo $id;?>" method="post">
					<h1>Updating Form</h1>
					
					<div class="form-w3step1">
						<input type="text" name="Name" value='<?php echo $name_; ?>' required=""> 
						<input type="email" class="email agileits-btm" value='<?php echo $email; ?>' name="Email"  required=""> 
					</div> 
					
					<div class="form-w3step1">  
						
						<input type="password" name="Password"value='<?php echo $pass; ?>'  required="">
						
					</div>
					
					<div class="form-w3step1 w3ls-formrow">
						<input type="text" name="Number" value='<?php echo $phone; ?>' required="">
						
					</div>
					  
					<input type="submit" value="Update" name="update">
				</form>
			</div>  
		</div>	
	</div>	
	
	
	
</body>
</html>
<?php
	if(isset($_POST['update'])){
	
		$edit_record1 = $_GET['edit_form'];
		
		echo $edit_record1;
		
		$name1_=$_POST['Name'];
		$email1=$_POST['Email'];
		$username1=$_POST['User Name'];
		$pass1=$_POST['Password'];
		$confirm1=$_POST['confirm password'];
		$phone1=$_POST['Number'];
			$address1=$_POST['Your Address'];

		$query2="UPDATE dbo.log_u SET Name_='$name1_', Email_='$email1', Username_='$username1', Password_='$pass1', confirmpassword_='$confirm1', Number_='$phone1', Youraddress_='$address1' WHERE u_id='$edit_record1'";
		
		$getResult1=sqlsrv_query($conn, $query2);
		
		echo "<script>";
		echo "window.alert('Data Updated')
		window.location.href='view1.php';
		</script>";
		
		/*if(mysql_query($query1))
		{
			echo "<script>window.open('view.php?updated=Record has been updated..!','_self')</script>";
		}*/
	}
?>
