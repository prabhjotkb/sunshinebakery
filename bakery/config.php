<?php
		$serverName = "sunbakery.database.windows.net";
$connectionOptions = array(
    "Database" => "sunbakery",
    "Uid" => "sunbakery",
    "PWD" => "@bakery01"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
				
				
?>
