<?php
$currentTheme = 'light';
if (isset($_COOKIE['dashboardTheme'])) {
    $currentTheme = $_COOKIE['dashboardTheme'];
}
?>
<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?= $absoluteUrl ?>/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Poiret+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= $absoluteUrl ?>/assets/images/faviconoclock.png" />
    <script defer src="<?= $absoluteUrl ?>/assets/js/app.js"></script>
    <title>O'clock Dashboard</title>

</head>

<body class="<?= $currentTheme ?>">
    <!--Conteneur principal + header-->
    <div id="bloc_page">
        <header>
            <div id="titre_principal">
                <div id="logo">
                    <!--<img id="logo-img" src="../images/logo_oclock.png" alt="logo_nomdusite" />-->
                    <a href="<?= $absoluteUrl ?>">
                        <h1>O'clock <span>Dashboard</span></h1>
                    </a>
                </div>
            </div>

            <!--Menu de navigation-->
            <nav>
                <ul>
                    <li>
                        <a href="#">Mémos</a>
                        <ul>
                            <li>
                                <a href="<?= $absoluteUrl ?>/astuces/">Astuces</a>
                            </li>
                            <li>
                                <a href="<?= $absoluteUrl ?>/php/">PHP</a>
                            </li>
                            <li>
                                <a href="<?= $absoluteUrl ?>/js/">JS</a>
                            </li>
                            <li>
                                <a href="<?= $absoluteUrl ?>/shortcuts/">Shortcuts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Oclock</a>
                        <ul>
                            <li><a href="<?= $absoluteUrl ?>/challenges/">Challenges</a></li>
                            <li><a href="<?= $absoluteUrl ?>/planning/">Planning</a></li>
                            <li></li>
                        </ul>
                    </li>


                    <li><a href="<?= $absoluteUrl ?>/contact/">Contact</a></li>
                    <!--<li><a href="php/inc/contact.php">Contact</a></li>-->
                </ul>

            </nav>
        </header>