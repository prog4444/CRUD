<meta charset=utf-8>
<?php
$dsn = "mysql:host=localhost; dbname=dars; charset=UTF8";
$pdo = new PDO($dsn, "root", "");
if (!$pdo) die("payvast nashud ");
echo "Connected successfully<br>";

//print_r(get_class_methods($pdo));

/*$zapros = "Select * from student";
$r=$pdo->query ($zapros);

echo "<table border=1>";
echo "<tr><td>ID</td><td>nasab</td></td></td><td>nom</td><td>npadar</td><td>jins</td><td>guruh</td><td>kurs</td><td>parol</td></tr>";
while($rr=$r->fetch())
{
    echo "<tr>";
    echo "<td>".$rr['id']."</td>";
    echo "<td>".$rr['familiya']."</td>";
    echo "<td>".$rr['nom']."</td>";
    echo "<td>".$rr['npadar']."</td>";
    echo "<td>".$rr['jins']."</td>";
    echo "<td>".$rr['guruh']."</td>";
    echo "<td>".$rr['kurs']."</td>";
    echo "<td>".$rr['parol']."</td>";
    echo "</tr>";
}
echo "</table>";*/

?>



