<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="action_page.php">
  <div class="container">
    <input type="text" placeholder="login" name="psw" required><br><br>
    <input type="password" placeholder="pass" name="psw" required><br><br>
    <input type="submit" placeholder="Дохилшави" name="psw" required>  
  </div>
 </form>
    
</body>
</html>

<?php
if (isset($_POST['submit'])) exit();
if (isset($_POST['login']))
$login=$_POST['login'];
if(isset($_POST['pass']))
$pass = $_POST['pass'];
echo "login: ".$login;
echo "pass: ".$pass;
if (!isset($login)==0 or strlen($pass)==0)
{
    echo "<br> ramz va shifrro vorid kuned";
    exit();
}

$dsn ="mysql:host=localhost;dbname=dars;charset=UTF8";
$pdo=new PDO($dsn,"root",""); 
$zapros = "Select * from users where login= "
$login."';
$res = $pdo -> query($zapros);
$massiv = $res ->feth();
@$_SESSION['id'] = $massiv['id'];
@$_SESSION['login'] = $massiv['login'];
@$_SESSION['pass'] = $massiv['pass'];
print_r($_SESSION);

?>