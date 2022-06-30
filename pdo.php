<meta charset=utf-8>
<a href="edit.php">Илова</a>
<?php
   $dsn ="mysql:host=localhost;dbname=dars;charset=UTF8";
	
	$pdo=new PDO($dsn,"root",""); 
	if(!$pdo) die("Paivast nashud");
	//echo "Connected<br>";
	//print_r(get_class_methods($pdo));
	/*
	$pdo->beginTransaction();
	$cmd="update student set kurs=1";
	$k=$pdo->exec($cmd);
		if(!$k) {$pdo->rollBack();
		//die("Error query");}
	else
		$pdo->commit();
	
	echo $k."<br>";
	*/
	$zapros="Select * from muallim";
	$r=$pdo->query($zapros);
	//$m=$r->fetchAll();
	//print_r($m);
	echo "<table border=1>";
	echo "<tr><td></td><td></td><td>ID</td><td>насаб</td>
	<td>guruh</td><td>jins</td><td>kurs</td>
	<td>nom</td><td>npadar</td><td>parol</td></tr>";
	while($rr=$r->fetch ())
	{
		echo "<tr>";
			echo "<td><a href=edit.php?id=".$rr['id'].">Edit</a></td>";
			echo "<td><a href=delete.php?id=".$rr['id'].">Delete</a></td>";
			echo "<td>".$rr['id']."</td>";
			echo "<td>".$rr['name']."</td>";
			echo "<td>".$rr['nasab']."</td>";
			echo "<td>".$rr['n_telefon']."</td>";
			echo "<td>".$rr['suroga']."</td>";
		
		echo "</tr>";	
	}
	echo "</table>";
?>