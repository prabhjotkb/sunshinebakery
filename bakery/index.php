<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	<?php include 'header.php'?>
	
		<form method="POST" action="index.php">
			<table  border="0" align="center">
				<tr>	
					<th colspan="6"><h1>Bakery's Registration Form</h1></th>
				</tr>
				<tr >
					<td align="right"><label>Customer Name:</label></td>
					<td><input type="text" name="customername"><font color="red"><?php echo @$_GET['customername']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Phone Number:</label></td>
					<td><input type="text" name="phonenumber"><font color="red"><?php echo @$_GET['phonenumber']; ?></font></td>
				</tr >
				<tr>
					<td align="right"><label>Pick-Up Date:</label></td>
					<td><input type="text" name="pickupdate"><font color="red"><?php echo @$_GET['pickupdate']; ?></font></td>
				</tr>
				<tr >
					<td align="right"><label>Product Ordered</label></td>
					<td><input type="text" name="productordered"><font color="red"><?php echo @$_GET['productordered']; ?></font></td>
				<td><select name="productordered">
    
                <option>Select your product</option>
                <option>Cakes</option>
                <option>Cupcakes</option>
                <option>Paneer Patties</option>
                <option>Allu Patties</option>
                <option>Chocolate Pasteries</option>
                <option>Pineapple Pasteries</option>
                <option>Bakery Biscuits</option>
					</select><font color="red"><?php echo @$_GET['productordered']; ?></font></td>
				</tr>
                <tr >
					<td align="right"><label>Product Quantity</label></td>
					<td><input type="text" name="productquantity"><font color="red"><?php echo @$_GET['productquantity']; ?></font></td>
				</tr>
				<tr>
					<td colspan="5" align="center"><input type="submit" value="Submit" name="submit"></td>
				</tr>
			</table>
			
		</form>
		<?php include 'footer.php'  ?>
        </div>
	</body>
</html>
<?php
/*$conn=mysql_connect("localhost","root","");
$db= mysql_select_db("students",$conn);*/

/*$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"students");*/

include('config.php');
 
 if (isset($_POST['submit']))
 {
 $student_name=$_POST['user_name'];
 $student_father=$_POST['father_name'];
 $student_school=$_POST['school_name'];
 $student_roll=$_POST['roll_no'];
 $student_class=$_POST['class_name'];
 
 if($student_name=='')
 {
	echo "<script>window.open('index.php?name=name is required','_self');</script>";
	exit();
 }
 if($student_father=='')
 {
	echo "<script>window.open('index.php?father=father's name is required','_self');</script>";
	exit();
 }
if($student_school=='')
 {
	echo "<script>window.open('index.php?school= school name is required','_self');</script>";
	exit();
 }
if($student_roll=='')
 {
	echo "<script>window.open('index.php?roll=roll no. is required','_self');</script>";
	exit();
 }
 if($student_class=='null')
 {
	echo "<script>window.open('index.php?class=class is required','_self');</script>";
	exit();
 }

	 
	 $tsql="insert into u_reg (username,fname,rollno)values('$student_name','$student_father','$student_roll')";
$getResults= sqlsrv_query($conn, $tsql);
	 


//if($conn->query($que)=== true)
//{
	echo "<center><b>The follwing Data has been inserted into our databse:</b></center>";
	echo "<table width='500px'align='center' border='4'><tr><td>$student_name</td><td>$student_father</td><td>$student_school</td><td>$student_roll</td><td>$student_class</td></tr></table>";                      
//}


}


?>
