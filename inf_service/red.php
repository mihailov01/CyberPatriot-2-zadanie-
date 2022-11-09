<?php session_start(); 
if (! $_SESSION['admin'])
header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
<?php include ("blocks/header.php");?>





<div class="wrap-container">
<article class="single-post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">



    <title>Обновление статьи</title>
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
	
	<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
require 'db.php';
$postid = $_GET["id"];
$sql = "SELECT * FROM posts WHERE id = :postid";
$posts = $pdo->prepare($sql);
$posts->bindValue(":postid", $postid);
// выполняем выражение и получаем статью по id
$posts->execute();
if($posts->rowCount() > 0){
foreach ($posts as $post) {
$title = $post["title"];
$text = $post["text"];
$category_id = $post["category_id"];
}
echo "<h3>Обновление статьи</h3>
<form method='post'>
<input type='hidden' name='id' value='$postid' />
<p>Название статьи:
<input type='text' name='title' value='$title' /></p>
<p>Текст статьи:
<textarea id='editor1' cols='100' rows='20'
name='text'>$text</textarea></p>
<p>Категория статьи:
<select name='category_id' >
<option value= '$category_id' >Задайте новую
категорию</option>
<option value= '1' >Frontend</option>
<option value= '2' >Backend</option>
<option value= '3' >Fullsteck</option>
</select>
<p>
<input type='submit' value='Обновить' />
</p>
</form>";
}
else{
echo "Статья не найдена";
}
}
// обновление статьи
elseif (isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["text"]))
{
require 'db.php';
$sql = "UPDATE posts SET title = :title, text = :text, category_id = :cat
WHERE id = :postid";
$posts = $pdo->prepare($sql);
// привязываем параметры к значениям
$posts->bindValue(":postid", $_POST["id"]);
$posts->bindValue(":title", $_POST["title"]);
$posts->bindValue(":text", $_POST["text"]);
$posts->bindValue(":cat", $_POST["category_id"]);
$posts->execute();
//переход на страницу обновленной статьи
$num = $_POST["id"];
header("Location: page.php?id=$num");
}
else{
echo "Некорректные данные";
}
?>

	

	<script type="text/javascript">
//Активируем CKEditor
CKEDITOR.replace('editor1',{
//Подключаем KCFinder
filebrowserBrowseUrl: 'kcfinder/browse.php?type=files',
filebrowserImageBrowseUrl: 'kcfinder/browse.php?type=images',
filebrowserFlashBrowseUrl: 'kcfinder/browse.php?type=flash',
filebrowserUploadUrl: 'kcfinder/upload.php?type=files',
filebrowserImageUploadUrl: 'kcfinder/upload.php?type=images',
filebrowserFlashUploadUrl: 'kcfinder/upload.php?type=flash'
});
</script>
	

</div>
</div>
</article>
<?php include ("blocks/footer.php");?>
</div>
</body>
</html>