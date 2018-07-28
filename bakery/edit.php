<?php
	include('config.php');
	$edit_id=$_GET['edit'];
        $query="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_id'";

	//$query="SELECT * FROM dbo.sunbakery1 WHERE id='$edit_record'";
	$getResults=sqlsrv_query($conn, $query);
       echo $getResults;
	?>
