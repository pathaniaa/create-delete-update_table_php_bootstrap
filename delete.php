<?php  
require 'db.php';
$id = $_GET['id'];
$sql='delete * from people where id=:id';
$statement = $connection->prepare($sql);
if($statement->execute([':id' => $id])){
	header("Location: index.php");
	
} 


 ?> 