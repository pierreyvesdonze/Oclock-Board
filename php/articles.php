<?php 
require 'data/articles.data.php';
require 'functions/myFunctions.php'; // Mettre getARticle ici dans une variable
$listArticles = getArticle($dataArticles,$_GET['id']);
?>


<?php 
require 'inc/header.tpl.php';
require 'inc/board.tpl.php';
require 'inc/article.tpl.php';
require 'inc/footer.tpl.php';
?>