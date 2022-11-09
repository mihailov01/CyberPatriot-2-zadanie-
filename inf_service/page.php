<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'db.php'; ?>
    <title><?php $post = get_post_by_id($_GET["id"]); ?>
	<?php echo $post["title"]; ?>
	</title>
<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
        
</head>
<body>

	

	<?php include ("blocks/header.php");?>
	
	<div class="wrap-container">
<article class="single-post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">
	<section>
		<article>
			<?php $post = get_post_by_id($_GET["id"]); ?>
			<h4><?php echo $post["title"]; ?></h4>
			<p2><?php echo $post["text"] ?></p2>
		</article>
</section>

	
</div>

</div>

</article>
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


