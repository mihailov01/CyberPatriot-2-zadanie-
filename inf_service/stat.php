<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Пользовательские стать о PHP</title>
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
</head>

<body >
	<?php require 'db.php'; ?>
	<?php include ("blocks/header.php");?>
	
<article class="single-post zerogrid">		
	<?php include ("blocks/navigation.php");?>
</article>

	
	<?php include ("blocks/content(db).php");?>


    <?php include ("blocks/footer.php");?>
</div>
    

</body>




</html>

<style>
article.single-post .entry-header {
    margin-bottom: 30px;
    text-align: left;
	text-align:left;
}
</style>