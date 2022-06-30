<meta charset=utf-8>
<?php
$dsn = "mysql:host=localhost; dbname=dars; charset=UTF8";
$pdo = new PDO($dsn, "root", "");
if (!$pdo) die("payvast nashud ");
echo "Connected successfully<br>";

//print_r(get_class_methods($pdo));

$zapros = "Select * from muallim";
$r=$pdo->query ($zapros);

echo "<table border=1>";
echo "<tr><td>ID</td><td>suroga</td></tr>";
while($rr=$r->fetch())
{
    echo "<tr>";
    echo "<td>".$rr['id']."</td>";
    echo "<td>".$rr['name']."</td>";
    echo "<td>"."<em>".$rr['suroga']."</em>"."</td>";
 
    echo "</tr>";
}
echo "</table>";

?>