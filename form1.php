<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<a href="index.html"><input type="button" name="HOME" value="home"></a>
	<br><br>
	<div class="container">
		
				<form action="form1.php" method="post">
					<center><h1>Client's Sign Up Form</h1></center>
					
					<div class="form-w3step1">
						<input type="text" name="Name_" placeholder="Your Name" required=""> 
						<input type="text" class="email agileits-btm" name="Email_" placeholder="Email" required=""> 
					</div> 
					
					<div class="form-w3step1">  
						<input type="text" name="Username_" placeholder="Username" required="">
						<input type="password" name="Password_" placeholder="Password" required="">
						<input type="password" class="agileits-btm" name="confirmpassword_" placeholder="Confirm Password" required="">
					</div>
					
					<div class="form-w3step1 w3ls-formrow">
						<input type="text" name="Number_" placeholder="Mobile number" required="">
						<input type="text" class="agileits-btm" name="Youraddress_" placeholder="Your Address" required="">
					</div>
					<div class="agileits-row2 w3ls-formrow2">
						<input type="checkbox" id="brand2" value="">
						<label for="brand2"><span></span>I accept the terms of Use</label> 
					</div>  
					<center><input type="submit" value="SUBMIT" name="submit"></center>
				</form>
			</div>  
		</div>	
	</div>	
	
	
	
</body>
</html>
<?php

//CONNECTIVITY WITH DATABASE
/*$conn=sqlsrv_connect("raccdbserver.database.windows.net","sandhuanan","A123./sandhu");
$db=sqlsrv_select_db($conn,"raccdb");*/
include('config.php'); 
//alert($conn);
 if (isset($_POST['submit']))
 {
 $racc_name=$_POST['Name_'];
 $racc_email=$_POST['Email_'];
     $racc_username=$_POST['Username_'];
 $racc_pass=$_POST['Password_'];
 $racc_confirm=$_POST['confirmpassword_'];
 $racc_number=$_POST['Number_'];
     $racc_address=$_POST['Youraddress_'];
     $que="INSERT INTO dbo.log_u (Name_,Email_,Username_,Password_,confirmpassword_,Number_,Youraddress_)VALUES ('$racc_name','$racc_email','$racc_username','$racc_pass','$racc_confirm','$racc_number','$racc_address')";
	$getResult=sqlsrv_query($conn, $que);

	echo "<script>";
        echo "window.alert('Your order has been taken!')
</script>";
}
?>
