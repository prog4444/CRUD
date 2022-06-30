<meta charset=utf-8>
<?php
$con = mysql_connect("localhost", "root", "");
if (!$conn) die("payvast nashud ");
echo "Connected successfully<br>";

mysql_query("Set names UTF8");
mysql_select_db("dars");

$zapros = "Select * from student";
$natija = mysql_query($zapros, $con);

if(!$natija){
    echo mysql_error();
    die ("zapros khato");}
echo "<table border=1>";
echo "<tr><td>ID</td><td>nasab</td>ном</td></td><td>падар</td></tr>";
while($r=msql_fetch_assos($natija))
{
    echo "<tr>";
    echo "<td>".$r['id']."</td>";
    echo "<td>".$r['familiya']."</td>";
    echo "<td>".$r['nom']."</td>";
    echo "<td>".$r['npadar']."</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close();
?>