<?php
$dbhost = "localhost";
$dbname = "mybase1";
$username = "root";
$password = "";

try {
$pdo = new PDO("mysql:host=$dbhost; dbname=$dbname; charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
echo "Ошибка соединения с базой данных: " . $e->getMessage();
}
// Получение всех статей 
function get_posts_all() {
    global $pdo;
    $posts = $pdo->query("SELECT * FROM posts");
    return $posts;
}
// Получение статьи по ее id
function get_post_by_id($id) {
    global $pdo;
    $posts = $pdo->query("SELECT * FROM posts WHERE id = $id");
    foreach ($posts as $post);
    return $post;
    }
// Получение статей по категории
function get_posts_by_category($category_id) {
global $pdo;
$posts = $pdo->query("SELECT * FROM posts WHERE category_id = $category_id");
return $posts;
}
function get_category_by_id($id) {
global $pdo;
$categories = $pdo->query("SELECT * FROM categories WHERE id = $id");
foreach ($categories as $category);
return $category['category_name'];
}
?>
