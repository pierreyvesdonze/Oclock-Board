<?php 
require 'data/articles.data.php';

/*Affiche les astuces, mémos etc. dans la section article*/
function showArticle($memos) {
    foreach ($memos as $key => $value) {
        echo $value['h3'];
        echo $value['texte'];
    }
};

/*Affiche les raccourcis dans la section article*/
function showShortcuts($shortcuts) {
    foreach ($shortcuts as $key => $value) {
        echo $value['h4'];
        echo $value['texte'];
    }
};


/*Affiche la catégorie sélectionnée*/
/*function showH5() {

    echo $_SERVER['REQUEST_URI'];
    if ($_SERVER['REQUEST_URI'] = "/O'clock/Projets/Oclock_Board/php/index.php") {
        $h5 = '<h5>ASTUCES</h5>';
        echo $h5;
    };
    
    if
        ($_SERVER['REQUEST_URI'] = "/O'clock/Projets/Oclock_Board/php/shortcuts.php") {
            $h5 = '<h5>SHORTCUTS<h5>';
        }
}*/