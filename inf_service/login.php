<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Вход</title>
    <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
        
       
<title>Авторизация</title>

</head>

<body>
 <?php include ("blocks/header.php");?>
      <div class="wrap-container">
<article class="single-post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">

<form action="validate.php" method="post">
<div class="login-box">
<div class="textbox">
<?php
if(!isset($_SESSION['login']))//Если логин в сессии отсутствует,определяем ему пусое значение
$_SESSION['login']=null;
else
$login=$_SESSION['login']; //Если логин в сессии уже присутствует, тозаписываем его значение
if (isset($login))//Проверяем существование логина и его валидность его зачения
{if ($login =='er login')
{echo '<code>Введён неправильный логин или пароль<br><a
href="login.php">на главную</a></code>';
$_SESSION['login']=null;
}
else
echo "<h3>Здравствуйте, $login</h3>";
}else
echo '<h3>Здравствуйте, гость</h3>';
?>
<input type="text" placeholder="Логин" name="login" value="">
</div>


<div class="textbox">
<input type="password" placeholder="Пароль" name="password" value="">
</div>
<input class="button" type="submit" value="Войти">
</div>
</form>
</div>
</div>
</article>
<?php include ("blocks/footer.php");?>
</div>
</body>
</html>






