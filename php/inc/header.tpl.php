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
    <link id="cssFile" rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Poiret+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/faviconoclock.png" />
    <title>O'clock Dashboard</title>

</head>

<body class="<?= $currentTheme ?>">
    <!--Conteneur principal + header-->
    <div id="bloc_page">
        <header>
            <div id="titre_principal">
                <div id="logo">
                    <!--<img id="logo-img" src="../images/logo_oclock.png" alt="logo_nomdusite" />-->
                    <h1>O'clock <span>Dashboard</span></h1>
                </div>
                <a href="index.php?id=index">
                    <h2>Le tableau de bord O'clock</h2>
                </a>
            </div>

            <!--Menu de navigation-->
            <nav>
                <ul>
                    <li>
                        <a href="#">Mémos</a>
                        <ul>
                            <li>
                                <a href="index.php?id=astuces">Astuces</a>
                                <!--ATTENTION URL-->
                            </li>
                            <li>
                                <a href="index.php?id=PHP">PHP</a>
                            </li>
                            <li>
                                <a href="index.php?id=JS">JS</a>
                            </li>
                            <li>
                                <a href="index.php?id=shortcuts">Shortcuts</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="index.php?id=planning">Planning</a></li>
                    <li><a href="index.php?id=challenges">Challenges</a></li>
                    <li><a href="index.php?id=contact">Contact</a></li>

                    <!--<li><a href="#">Contact</a></li>-->
                </ul>
                
            </nav>
        </header>