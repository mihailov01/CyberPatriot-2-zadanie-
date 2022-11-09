<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'db.php'; ?>
    <title><?php echo get_category_by_id($_GET["id"]); ?></title>
    <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
</head>
<body>
	
<div id="container">
	<?php include ("blocks/header.php");?>
    <div class="zerogrid">
	<?php include ("blocks/navigation.php");?>
    </div>
	<div class="wrap-container">


<h3><?php echo get_category_by_id($_GET["id"]); ?>:</h3>
<?php $category_id = $_GET["id"]; ?>
<?php $posts = get_posts_by_category($category_id); ?>
<?php foreach ($posts as $post)
{ ?>
<article class="single-post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">
<article>
<h3><?php echo $post["title"]; ?></h3>
<p><?php echo $post["text"] ?></p>
</div>
</div>
</article>
</article>
<?php } ?>

</div>
<?php include ("blocks/footer.php");?>
</div>

</article>

</div>
</body>
</html>
<style>
h1 {
text-align: left;
margin: 10px 0px;
color: rgb(255, 80, 80);
}
h2 {
text-align: left;
margin: 5px 15px;
color: rgb(121, 121, 121);
}
nav {
width: 100%;
height: 40px;
text-align: center;
background: grey;
position: sticky;
top: 0px;
}
.top-menu li {
display: inline-block;
padding: 10px 30px;
margin: 0;
}
.top-menu li:hover {
background: black;


}
.top-menu a {
color: white;
font-size: 16px;
}

article a.category {
text-align: right;
}


</style>