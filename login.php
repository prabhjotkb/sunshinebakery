<?php
session_start();
?>
<html>
    <head>
        <title>sunshine bakery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
<body>
    <h1>Sunshine Bakery</h1>
    <form method="post" action="login.php">
    <center><input type="text" name="admin_user" placeholder="Enter your username"><font color="red"><?php echo @$_GET['user']?></font><br>
    <input type="password" name="admin_pass" placeholder="Enter your password"><font color="red"><?php echo @$_GET['pass']?></font><br><br>
    <input type="submit" name="submit" value="sign in" onclick="bakery/index.php"></center>
    </form>
	<center><?php echo @$_GET['error'] ?></center>
    </body>
</html>

<?php

include('config.php');
		if(isset($_POST['login'])){
			$admin_name=$_SESSION['admin_name']=$_POST['admin_name'];
			$admin_pass=$_POST['admin_pass'];
			
			$query="select * from login where user_name='$admin_name' AND user_password='$admin_pass'";
			$run=mysql_query($query);
			
			if(mysql_num_rows($run)>0){
				
				echo "<script>window.open('view.php?logged=logged in successfully...!','_self')</script>";
			}
			else
			{
				echo "<script>alert('Password or User Name is incorrect!')</script>";
			}
		}
?>
