<?php session_start(); ?>
<?php
$_SESSION['login']=null;

$_SESSION['admin']=null;
header("Location: index.php");
?>