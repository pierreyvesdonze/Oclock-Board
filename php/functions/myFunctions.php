<?php
require 'data/articles.data.php';

function getArticle($dataArticles) {
    if (isset($_GET['id']) && $_GET['id'] = ('memosPhp')) {
            foreach ($dataArticles[0] as $key => $value) {
                echo $value['titre'];
                echo $value['texte']; 
            }       
    }
}


/*Affiche les astuces dans la section article*/
function showArticle($astuces)
{
    foreach ($astuces as $key => $value) {
        echo $value['titre'];
        echo $value['texte'];
    }
};


/*Affiche les raccourcis dans la section article*/
function showShortcuts($shortcuts)
{
    foreach ($shortcuts as $key => $value) {
        echo $value['titre'];
        echo $value['texte'];
    }
};


/*Affiche les mémos PHP dans la section article*/
function showMemo($memosPhp)
{
    foreach ($memosPhp as $key => $value) {
        echo $value['titre'];
        echo $value['texte'];
    }
};




/*Affiche l'intitulé de la page courante*/
function getUrl()
{

    if ($_SERVER['REQUEST_URI'] == "/O'clock/Projets/Oclock_Board/php/index.php") {
        $urlServer = '<h5>HOME</h5>';
    }
    if ($_SERVER['REQUEST_URI'] == "/O'clock/Projets/Oclock_Board/php/articles.php?id=astuces") {
        $urlServer = '<h5>ASTUCES</h5>';
    }
    if ($_SERVER['REQUEST_URI'] == "/O'clock/Projets/Oclock_Board/php/shortcuts.php?id=shortcuts") {
        $urlServer = '<h5>SHORTCUTS<h5>';
    }
    if ($_SERVER['REQUEST_URI'] == "/O'clock/Projets/Oclock_Board/php/planning.php") {
        $urlServer = '<h5>PLANNING<h5>';
    }
    if ($_SERVER['REQUEST_URI'] == "/O'clock/Projets/Oclock_Board/php/memosPhp.php?id=memosPhp") {
        $urlServer = '<h5>P H P<h5>';
    }
    echo $urlServer;
};




/*Récupère nom & prénom dans le formulaire et retourne l'URL personnalisée du VPN O'clock*/

function getNameVpn()
{

    if (isset($_POST['goVpn']) && !empty($_POST['goVpn'])) {
        $name = $_POST['goVpn'] . '.vpnuser.lan';
        header("Location: http://" . $name);
    }
}

?>