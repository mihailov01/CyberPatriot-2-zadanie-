<?php session_start(); 
if (! $_SESSION['admin'])
header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Страница администирования</title>
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
</head>
<body>

<?php require 'db.php'; ?>
<?php include ("blocks/header.php");?>
<div class="wrap-container">
<article class="single-post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">
	
    <?php
if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
$sql = "DELETE FROM posts WHERE id = {$_GET['del_id']}"; //удаляем строку изтаблицы
$affectedRowsNumber = $pdo->exec($sql); //получаем количество удаленныхстрок
if ($sql) {
echo "Удалено записей: $affectedRowsNumber";
}
else echo "Запись не удалена: " . $e->getMessage();
}
?>
<table>

<tr>
<th>Название</th>
<th>Содержание</th>
<th>&#10006;</th><!-- знак в виде крестика -->
<th>&#9998;</th><!-- знак в виде карандаша -->
</tr>
<?php
$posts = get_posts_all();
foreach ($posts as $post){
echo
'<tr>' .
"<td>{$post['title']}</td>" .
"<td>{$post['text']}</td>" .
"<td><a href='?del_id={$post['id']}'>Удалить</a></td>" .
"<td><a href='red.php?id={$post['id']}'>Изменить</a></td>" .
'</tr>';
}
?>
</table>

	
</div>
</div>
</article>
<?php include ("blocks/footer.php");?>
</div>

</body>
</html>

















<style>
.container{
     text-align: 
}
table {
border-collapse: collapse;
text-align: left;
}
th {
border: 1px solid rgb(206, 206, 206);
background-color: #DCDCDC;
text-align: center;
}
td {
border: 1px solid rgb(206, 206, 206);
}
form {
text-align: left;
}

</style>
