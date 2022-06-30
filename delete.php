<?php
   $dsn ="mysql:host=localhost;dbname=dars;charset=UTF8";
	$id=$_GET["id"];
	$pdo=new PDO($dsn,"root",""); 
	if(!$pdo) die("Paivast nashud");
	$cmd="delete from muallim where id=".$id;
	$k=$pdo->exec($cmd);
	if($k) header("location: pdo.php");
	else
		echo "error ".$zapros; 		
	
?>