<?php
require 'data/articles.data.php';



//////////////////////////////////////////////////// GETARTICLE
// Permet d'afficher la page demandée dans le main
function getArticle($dataArticles) {
    
    if (isset($_GET['id']) && $_GET['id'] == 'astuces') {
        foreach ($dataArticles[0] as $key => $value) {
            echo $value['titre'];
            echo $value['texte']; 
        }       
    } elseif (isset($_GET['id']) && $_GET['id'] == 'shortcuts') {
        foreach ($dataArticles[1] as $key => $value) {
            echo $value['titre'];
            echo $value['texte']; 
        }
    } elseif (isset($_GET['id']) && $_GET['id'] == 'memosPhp') {
        foreach ($dataArticles[2] as $key => $value) {
            echo $value['titre'];
            echo $value['texte']; 
        }
    } elseif (isset($_GET['id']) && $_GET['id'] == 'memosJs') {
        foreach ($dataArticles[3] as $key => $value) {
            echo $value['titre'];
            echo $value['texte']; 
        } 
    }
};




//////////////////////////////////////////////////// GETURL
/*Affiche l'intitulé de la page courante*/
function getUrl() {
    if (isset($_GET['id']) && $_GET['id'] == 'index') {
        $urlServer = '<h5>HOME</h5>';
    } else if (isset($_GET['id']) && $_GET['id'] == 'astuces') {
        $urlServer = '<h5>ASTUCES</h5>';
    } else if (isset($_GET['id']) && $_GET['id'] == 'shortcuts') {
        $urlServer = '<h5>SHORTCUTS</h5>';
    } else if (isset($_GET['id']) && $_GET['id'] == 'planning') {
        $urlServer = '<h5>PLANNING</h5>';
    } else if (isset($_GET['id']) && $_GET['id'] == 'memosPhp') {
        $urlServer = '<h5>PHP</h5>';
    } else if (isset($_GET['id']) && $_GET['id'] == 'memosJs') {
        $urlServer = '<h5>JS</h5>';
    }
    echo $urlServer;
};




//////////////////////////////////////////////////// GETNAMEVPN
/*Récupère nom-prénom dans le formulaire et retourne l'URL personnalisée du VPN O'clock*/

//* * * * * Nécessite une regex * * * * *//
function getNameVpn()
{
    if (isset($_POST['goVpn']) && !empty($_POST['goVpn'])) {
        $name = $_POST['goVpn'] . '.vpnuser.lan';
        header("Location: http://" . $name);
    }
}
