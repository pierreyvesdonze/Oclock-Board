<?php 
require 'data/articles.data.php';

function showArticle($memos) {
    foreach ($memos as $key => $value) {
        echo $value['h3'];
        echo $value['texte'];
    }
};

function showShortcuts($shortcuts) {
    foreach ($shortcuts as $key => $value) {
        echo $value['h4'];
        echo $value['texte'];
    }
};