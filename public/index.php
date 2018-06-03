<?php

$serverName = "145.24.222.167,8080"; 
$connectionInfo = array( "Database"=>"project4App", "UID"=>"sa", "PWD"=>"Estrela0120");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>