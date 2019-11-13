<main>
    <article>
        <?php foreach($listArticles as $article) : ?>
            <h3><?=$article['titre']?></h3>
            <p><?=$article['texte']?></p>
        <?php endforeach ?>
    </article>
</main>