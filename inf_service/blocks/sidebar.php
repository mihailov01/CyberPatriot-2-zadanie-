<aside>
<?php
        $posts = get_posts_all();
        foreach ($posts as $post) { ?>
       <ul>
             <li >   
            <a href="page.php?id=<?php echo $post["id"]; ?>"><?php echo $post["title"]; ?></a><br>
            </li>
        </ul>       
    <?php } ?>
</aside>