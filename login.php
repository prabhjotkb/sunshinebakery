<?php
include ('config.php');
session_start();
if(isset($_POST['login_btn'])){
    
$username_var=$_POST['username_box'];
$password_var=$_POST['password_box'];    
$_SESSION['username']=$username;
  //  echo "<script>alert($username_var)</script>" ;
    
    //  echo "<script>alert($password_var)</script>" ;
    if($username_var=="admin"&&$password_var=="admin"){
        
        header('Location:view.php');
    }else{
        
           
  $queryS="select * from dbo.login where username='$username_var' and password_='$password_var'";  
$result=sqlsrv_query($conn,$queryS);
$row=sqlsrv_fetch_array($result);
    
         if($username_var==null || $username_var=="" && $password_var==null || $password_var=="")
         {
    echo "<script>alert('Please enter a valid Username or Password!')</script>";
            }
       
    
    else if($row['username']==$username_var && $row['password_']==$password_var)
    {
   
        
       // echo "<script>alert('Login Succesfull!');</script>";
        header('Location:bakery/view.php');
}
else{
   // echo "<script>alert('Login Failed!');</script>";
    header('Location:index.html');
}
    }
}
?>
?>
<html>
    <head>
    <title>Sign In</title>
        <style>
        #button
            {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover {
    opacity: 0.5;
}
#cancelbtn 
            
{
    background-color: #e52c2c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
    </style>
    </head>
    <div style="clear:both"></div>
    
    <br>
    
    <div id="table_main">
        <form name=myform method="POST" action="sign_final.php">
<table align="center" cellspacing="15px" cellpadding="15px" bgcolor="rgba(255, 255, 255, 0.88)">
    <tr><th><font color="white" size="5px">Username:</font></th><th><input type="text" name=username_box></th></tr>
    <tr><th><font color="white" size="5px">Password:</font></th><th><input type="password" name="password_box"></th></tr>
    <tr><th><input type="submit" name="login_btn" id="button"></th><th><input type="reset" value="reset" name="button" id="cancelbtn"></th></tr>
    
</table>
    </form>
        </div>
</html>
