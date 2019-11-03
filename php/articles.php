<?php 
require 'inc/header.php';
require 'functions/myFunctions.php';
require 'inc/board.php';
?>

   

        <article>
            <?php
                getArticle($dataArticles);
            ?>
        </article>
    </main>

    <script src="../js/functions.js"></script>

</body>
</html>