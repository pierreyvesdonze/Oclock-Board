<?php 
require 'data/articles.data.php';
require 'functions/myFunctions.php'; 
if (isset($_GET['id'])) {
    $listArticles = getArticle($dataArticles, $_GET['id']);
}else{
    $listArticles = [];
}
?>


<?php 
require 'inc/header.tpl.php';
require 'inc/board.tpl.php';
require 'inc/articles.tpl.php';
require 'inc/footer.tpl.php';
?>