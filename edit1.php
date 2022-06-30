<meta charset=utf-8>
<a href="pdo.php">Асоси</a>
<?php
   $dsn ="mysql:host=localhost;dbname=dars;charset=UTF8";
	$pdo=new PDO($dsn,"root",""); 
	if(!$pdo) die("Paivast nashud");
	$action="new";
	$id=$_GET['id'];
	$edit="";
	if (isset($id))
	{
	 $action="update";
	 $edit="readonly";
	 $zapros="Select * from muallim where id=".$id;
	 $r=$pdo->query($zapros);
	 $rr=$r->fetch ();
	} else
	{
	$rr['id']="";
	$rr['name']="";
	$rr['nasab']="";
	$rr['n_telefon']="";
	$rr['suroga']="";
	}

	$p[]="id";
	$p[]="name";
	$p[]="nasab";
	$p[]="n_telefon";
	$p[]="suroga";

	
	echo "<form action=save.php?action=$action method=POST>";
	echo "<table border=1>";
	echo "<tr><td>Ном</td><td>Кимат</td></tr>";
	foreach($p as $sutun)
	{
		echo "<tr><td>".$sutun."</td>";
		echo "<td>";
		if ($sutun=="id")
			echo "<input type=text name=$sutun ".$edit."  value=$rr[$sutun]>";
			else
		echo "<input type=text name=$sutun value=".$rr[$sutun].">";
		echo "</td>";
		echo "</tr>";
	}	
	echo "</table>";
	echo "<input type=submit value=Сабт>";
	echo "</form>"
?>