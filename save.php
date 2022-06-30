<?php
   $dsn ="mysql:host=localhost;dbname=dars;charset=UTF8";
	$p[]="id";
	$p[]="name";
	$p[]="nasab";
	$p[]="n_telefon";
	$p[]="suroga";

	$id=$_POST['id'];
	
	foreach($p as $sutun)
	{
		$sutunho.="". $sutun. ",";
		$qimatho.="'". $_POST[$sutun]. "',";
		$qimat.="". $sutun. "='".$_POST[$sutun]."',";
	}
	$sutunho= substr($sutunho,0,strlen($sutunho)-1);
	$qimatho= substr($qimatho,0,strlen($qimatho)-1);
	$qimat= substr($qimat,0,strlen($qimat)-1);
	
	//echo $sutunho; 
	
	$pdo=new PDO($dsn,"root",""); 
	if(!$pdo) die("Paivast nashud");
	$action=$_GET["action"];
	switch ($action)
	{
		case "new":
			
			$zapros="Insert into muallim(".$sutunho.") values(".$qimatho.")";
			//echo $zapros;
		break;
		case "update":
			$zapros="Update muallim set ".$qimat. " where id=".$id;
			//echo $zapros;
		break;
	}
	$k=$pdo->exec($zapros);
	
	if($k) header("location: pdo.php");
	else
		echo "error ".$zapros; //$pdo->errorMessage();
?>