<?php
if (isset($_GET['id'])) {
    $listArticles = getArticle($dataArticles, $_GET['id']);
}else{
    $listArticles = [];
}
?>

