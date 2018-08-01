<?php
include('config.php');

$delete_record = $_GET['del'];

$query ="DELETE FROM dbo.log_u WHERE Email_='$delete_record'";

$getResult=sqlsrv_query($conn, $query);

echo "<script>";
        echo "window.alert('Data Deleted')
	window.location.href='view1.php';
</script>";
?>