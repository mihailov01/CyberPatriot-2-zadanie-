
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
.top-menu a:hover {
color: white;
}a
rticle a.category {
text-align: right;
}
</style>
 
	

<?php
	$posts = get_posts_all();
		foreach ($posts as $post) {
		?>
		<article class="single-post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">
					

			<h3 class="title"><a href="page.php?id=<?php echo $post["id"]; ?>"><?php echo  $post ["title"]; ?></a></h3>
			<p><?php echo $sting = mb_substr($post["text"], 0, 400) . "..."; ?></p>
			</div>
</div>
</article>
	<?php } ?>


	

