<?php
// header('Location: articles.php');
require 'php/data/articles.data.php';
require 'php/functions/myFunctions.php'; 
require 'php/inc/header.tpl.php';
require 'php/inc/board.tpl.php'; ?>


<?php 

if (isset($_GET['id'])) {
    $listArticles = getArticle($dataArticles, $_GET['id']);
}else{
    $listArticles = [];
}
?>

<main>
    <article>
        <?php foreach($listArticles as $article) : ?>
            <h3><?=$article['titre']?></h3>
            <p><?=$article['texte']?></p>
        <?php endforeach ?>
    </article>
</main>




<?php require __DIR__. '/php/inc/footer.tpl.php'; ?>