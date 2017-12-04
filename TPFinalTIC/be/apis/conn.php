<?php
header("Access-Control-Allow-Origin: *");

$HostName = "localhost";
$HostUser = "root";
$HostPass = "root";
$DatabaseName = "dbtpfinaltic";
$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
?>
