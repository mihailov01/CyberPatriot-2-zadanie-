
<div class="wrap-body">
<header class="main-header">
			<div class="zerogrid">
				<div class="t-center">
					<a class="site-branding" href="index.html">
						<img src="images/logo.png" width="150px"/>	
					</a><!-- .site-branding -->
				</div>
				<div class="row">
					<div class="col-2-3">
						<!-- Menu-main -->
						<?php
if(!isset($_SESSION['login'])){//Если логин в сессии отсутствует,определяем ему пустое значение
$_SESSION['login']=null;
}
else
$login = $_SESSION['login'];
if (isset($login)){
echo "<i>Добро пожаловать, $login</i>";
if ($login=='admin'){
$_SESSION['admin'] = true;

}

}
?>
						<div id='cssmenu'>


							<ul>
							   <li class="active"><a href='index.php'><span>Главная</span></a></li>
							   <li><a href='about.php'><span>О PHP</span></a></li>
							   <li><a href='stat.php'><span>Статьи</span></a></li>

							   
							  
                               <li>
                                   <?php
if(!isset($_SESSION['login'])){//Если логин в сессии отсутствует,определяем ему пустое значение
$_SESSION['login']=null;
echo '<a href="login.php">Войти</a>';
}
else
$login = $_SESSION['login'];
if (isset($login)){

if ($login=='admin'){
$_SESSION['admin'] = true;



}

}

?>

<?php
if(!isset($_SESSION['login'])){ //Если логин в сессии отсутствует,определяем ему пустое значение
$_SESSION['login']=null;
}
else
$login = $_SESSION['login'];
if (isset($login)){

if ($login=='admin'){
$_SESSION['admin'] = true;
echo '<a href="add.php">Добавить</a>';
echo '<li><a href="adminpage.php">  Редактировать</a></li>';
}
echo '<li><a href="logout.php">  Выйти</a></li>';
}

?>
</li>



	






							</ul>



						</div>
					</div>
					
				</div>
			</div>
		</header>