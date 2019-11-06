<?php

setcookie('dashboardTheme', $_GET['theme']);

// On ne peut pas faire cela
//echo $_COOKIE['theme'];

header('Location: articles.php?id=astuces');

/**
 * Etape 1 : (On fabrique la pâte à cookie) php créer dit à apache d'envoyer un cookie à l'utilisateur
 * Etape 2 : (On met le cookie dans le four) l'utilisateur récupère la page envoyé par apache et l'affiche
 * Etape 3 : (On sort le cooke du four pour le manger) Le navigateur voit l'instruction de création de cookies dans les entêtes de la page reçu et créer donc le cookie dans le navigateur de l'utilisateur
 */