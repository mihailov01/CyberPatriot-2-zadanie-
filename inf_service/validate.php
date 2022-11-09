<?php session_start();
include_once ('db.php');
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$login = test_input($_POST["login"]);
$password = test_input( $_POST ["password"]);
$result = $pdo->prepare("SELECT * FROM users WHERE login='$login' AND BINARY
password='$password'");
$result->execute();
$users = $result->fetchAll(); //извлекаем все строки
if ($users){
$_SESSION['login']=$login;
header("Location: index.php");
}else {
$_SESSION['login']='er login';
header("Location: login.php");
die ();
}
?>