<?php
		$serverName = "studentserv.database.windows.net";
$connectionOptions = array(
    "Database" => "sunshinebakery",
    "Uid" => "root",
    "PWD" => " "
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
				
				
?>
				
