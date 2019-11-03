<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/test.css"/>
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Poiret+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/faviconoclock.png" />
    <title>O'clock Dashboard</title>

</head>

<body>
    <!--Conteneur principal + header-->
    <div id="bloc_page">
        <header>
            <div id="titre_principal">
                <div id="logo">
                    <img src="../images/logo_oclock.png" alt="logo_nomdusite" />
                    <h1>O'clock <span>Board</span></h1>
                </div>
                <a href="index.php"><h2>Le tableau de bord O'clock</h2></a>
            </div>

            <!--Menu de navigation-->
            <nav>
                <ul>
                    <li>
                        <a href="#">Mémos</a>
                        <ul>
                            <li>
                                 <a href="articles.php?id=astuces">Astuces</a> <!--ATTENTION URL-->
                            </li>
                            <li>
                               <a href="articles.php?id=memosPhp">PHP</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="articles.php?id=shortcuts">Shortcuts</a></li>
                    <li><a href="planning.php?id=planning">Planning</a></li>
                    
                    <!--<li><a href="#">Contact</a></li>-->
                </ul>
            </nav>
        </header>