<?php

//////////////////////////////////////////////////// GETARTICLE
// Permet d'afficher la page demandée dans le main
function getArticle($dataArticles, $categorie) {
    return $dataArticles[$categorie];
};




//////////////////////////////////////////////////// GETURL
/*Affiche l'intitulé de la page courante*/
function getUrl() {
    $urlBoard = "";
    if (isset($_GET['id'])) {
        $urlBoard = $_GET['id'];
        echo $urlBoard;
    }
}




//////////////////////////////////////////////////// GETNAMEVPN
/*Récupère nom-prénom dans le formulaire et retourne l'URL personnalisée du VPN O'clock*/

//* * * * * Nécessiterait une regex * * * * *//
function getNameVpn() {
    
    if (isset($_POST['goVpn']) && !empty($_POST['goVpn'])) {
        $name = $_POST['goVpn'] . '.vpnuser.lan';
        header("Location: http://" . $name);
    }
};
