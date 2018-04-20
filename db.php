<?php
$dsn='mysql:host=localhost;dbname=company';

$username = 'root';
$password = '';
$option = [];
try{
	$connection = new PDO($dsn,$username,$password,$option);
	//echo 'connection successful';
}
catch(PDOException $e){
	
}


