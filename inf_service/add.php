<?php session_start(); 
if (! $_SESSION['admin'])
header('Location: index.php');
if(isset($_POST['submit'])){
// Получаем данные из POST запроса
  $title = $_POST['title'];
  $text = $_POST['text'];
  $category_id = $_POST['category_id'];
  
  if($title != ''){
    require 'db.php'; // Подключаем файл базы данных
// Формируем запрос с помощью ключей
    $sql = 'INSERT INTO posts (title, text, category_id) VALUES (:title, :text, :category_id)';
    $query = $pdo -> prepare($sql); // Возвращает объект
   
// В кавычках нужно указать ключи, которые мы указали в запросе.
// А после передать значение, которое должно подставится.
    $query -> execute(['title' => $title, 'text' => $text,  'category_id' => $category_id]);
    header('location: index.php');
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
    <title>Добавление статьи</title>

<!-- Подключаем CKEditor --> 
<script src="ckeditor/ckeditor.js"></script> 
</head>


<body>
  


  
<?php include ("blocks/header.php");?>
<div class="wrap-container">
<article class="single-post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">


	<h3>Добавление статьи</h3>
<form action="" method="post">
	<p>
		<label>Название статьи:<br></label>
		<input type= "text" name="title" size = "30">
	</p>
	
	<label>Текст статьи:<br></label>
		<textarea id="editor1" name="text" cols="100" rows="20"></textarea>
		<script>
        //Активируем CKEditor
          CKEDITOR.replace('editor1', {
          // Подключаем KCFinder
          filebrowserBrowseUrl: 'kcfinder/browse.php?type=files',
          filebrowserImageBrowseUrl: 'kcfinder/browse.php?type=images',
          filebrowserFlashBrowseUrl: 'kcfinder/browse.php?type=flash',
          filebrowserUploadUrl: 'kcfinder/upload.php?type=files',
          filebrowserImageUploadUrl: 'kcfinder/upload.php?type=images',
          filebrowserFlashUploadUrl: 'kcfinder/upload.php?type=flash'
          });
		</script><br>
	</p>
	<p>
	<label>Категория статьи:</label>
	<select name="category_id" >
	  <option value= "1" >Frontend</option>
	  <option value= "2" >Backend</option>
	  <option value= "3" >Fullsteck</option>
	</select><br>
	</p>
	<p>
	<input type="submit" name="submit" value="Добавить">
	</p>
</form>
</div>
</div>
</article>
<?php include ("blocks/footer.php");?>
</div>
</body>
</html>