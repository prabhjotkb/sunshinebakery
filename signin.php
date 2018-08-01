<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Client Signup Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main main-agileits">
		<h1>User Sign In </h1>
		<div class="main-agilerow"> 
			<div class="signup-wthreetop">
				<h2>Welcome to Sign In</h2>
				
			</div>	
			<div class="contact-wthree">
				<form action="signin.php" method="post">
					
					<div class="form-w3step1">
						<input type="text" name="admin_name" placeholder="Username" required=""> 
						<input type="password" name="admin_pass" placeholder="Password" required=""> 
					</div> 
					
					<input type="submit" name="login_btn" value="Sign In">
				</form>
			</div>  
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
		<p>© 2017 Client Signup Form. All rights reserved </p>
	</div>
	
</body>
</html>
<?php
include ('config.php');
session_start();
if(isset($_POST['login_btn'])){
    
$username_var=$_POST['admin_name'];
$password_var=$_POST['admin_pass'];    
$_SESSION['username']=$username;
  //  echo "<script>alert($username_var)</script>" ;
    
    //  echo "<script>alert($password_var)</script>" ;
    if($username_var=="admin"&&$password_var=="admin"){
        
        header('Location:view1.php');
    }else{
        
           
  $queryS="select * from dbo.log_u where Username_='$username_var' and Password_='$password_var'";  
$result=sqlsrv_query($conn,$queryS);
$row=sqlsrv_fetch_array($result);
    
         if($username_var==null || $username_var=="" && $password_var==null || $password_var=="")
         {
    echo "<script>alert('Please enter a valid Username or Password!')</script>";
            }
       
    
    else if($row['username']==$username_var && $row['password_']==$password_var)
    {
   
        
       // echo "<script>alert('Login Succesfull!');</script>";
        header('Location:view1.php');
}
else{
   // echo "<script>alert('Login Failed!');</script>";
    header('Location:signin.php');
}
    }
}
?>
