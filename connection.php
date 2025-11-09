<?php
//connectoin with db
$db="bus_service";
$link= mysqli_connect("localhost", "root", "", $db);
 
if(!$link){
	die(mysqli_error($link).mysqli_errno($link));
}
?>