<?php

$dataArticles =
    [

        "astuces" => [
            [
                "titre" => "Astuce <span>#1</span> Souviens-toi...",
                "texte" => "<ul>
                                        <li>
                                            <span>K</span>eep <span>I</span>t <span>S</span>imple, <span>S</span>tupid !
                                        </li>
                                        <li>
                                            <span>T</span>ry <span>I</span>t <span>Y</span>ourself !
                                        </li>
                                        <li>
                                            <span>R</span>ead <span>T</span>he <span>F</span>ucking <span>M</span>anual !
                                        </li>
                                        <li>
                                        <span>N</span>ever <span>T</span>hrust <span>U</span>ser <span>I</span>nput
                                        </li>
                                        <li>
                                        <span>D</span>on't <span>R</span>epeat <span>Y</span>ourself
                                        </li>
                                    </ul>"
            ],
            [
                "titre" => "<h3>Astuce <span>#2</span> La p'tite manip GIT qui va bien</h3>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            Ouvrir un terminal (Alt + Ctrl + T)
                                        </li>
                                        <li>
                                            Vérifier que l'on est sur le bon répertoire (pwd ou ls)
                                        </li>
                                        <li>
                                            git status
                                        </li>
                                        <li>
                                            git add .
                                        </li>
                                        <li>
                                            git commit -m \"Un message (explicite)\"
                                        </li>
                                        <li>
                                            git push
                                        </li>
                                    </ul>
                                </p>"
            ],
            [
                "titre" => "<h3>Astuce <span>#3</span> Personnaliser VSCODE</h3>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            Aller dans les paramètres de VSCODE (CTRL + ,)
                                        </li>
                                        <li>
                                            Workbench / Appearance / Color Theme
                                        </li>
                                        <li>
                                            Choisis ton thème
                                        </li>
                                        <li>
                                            Et pour changer la couleur de la docstring...
                                        </li>
                                        <li>
                                            Taper : 'tokenColorCustomizations' dans 'search settings'
                                        </li>
                                        <li>
                                            Cliquer sur 'Edit in settings.json'
                                        </li>
                                        <li>
                                            Tape : 'editor.tokenColorCustomizations': {
                                            'comments': '#fff}, (ou la couleur de son choix)'
                                        </li>
                                        <li>
                                            Faire attention à placer une virgule 
                                            à la fin du paramètre précédent
                                        </li>
                                    </ul>
                                </p>"
            ],
            [
                "titre" => "<h3>Astuce <span>#4</span> La fausse manip GIT qui fait mal...</h3>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            Si tu clones un dépôt depuis GIT portant le même nom de dossier que ton dépôt local sans avoir pris soin de commit/push au préalable, ton dépôt local et tout ce qu'il contient seront anéantis, comme toi.
                                        </li>
                                    </ul>
                                </p>"
            ],

            [
                "titre" => "<h3>Astuce <span>#5</span> Obtenir un terminal Linux sous Windows (BASH)</h3>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            Sous Windows 10, 'Bash', un shell Linux est installé par défaut. Pour l'activer :
                                        </li>
                                        <li>
                                            Aller dans tes 'Paramètres Windows' / Mise à jour et sécurité
                                        </li>
                                        <li>
                                            Activer le mode développeur
                                        </li>
                                        <li>
                                            Aller dans panneau de config / Programmes
                                        </li>
                                        <li>
                                            Cliquer sur 'Activer ou désactiver des fonctionnalités de Windows'
                                        </li>
                                        <li>
                                            Cocher 'Sous-système Windows pour Linux'
                                        </li>
                                        <li>
                                            Redémarrer...
                                        </li>
                                        <li>
                                            ...ou sinon, <a href ='https://git-scm.com/downloads'> télécharger GIT</a> c'est aussi bien !
                                        </li>
                                    </ul>
                                </p>"
            ],

            [
                "titre" => "<h3>Astuce <span>#6</span> Utiliser BASH depuis VSCODE</h3>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            Dans VSCCODE => Ctrl + Shift + P
                                        </li>
                                        <li>
                                            Sélectionner Git Bash dans les options
                                        </li>
                                        <li>
                                            Ouvrir un terminal. Bash s'ouvre directement 
                                            sur le répertoire de travail courant. 
                                        </li>
                                    </ul>
                                </p>"
            ],

            [
                "titre" => "<h3>Astuce <span>#7</span> Un petit générateur de tableau HTML bien pratique</h3>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            <span><a href='https://www.tablesgenerator.com/html_tables' target = 'blank'>tablesgenerator</a> 
                                            </span>
                                        </li>
                                    </ul>
                                </p>"
            ],

            [
                "titre" => "<h3>Astuce <span>#8</span> Raccourci EMMET pour générer une entête HTML</h3>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            Touche '!' puis 'Entrée'
                                        </li>
                                    </ul>
                                </p>"
            ],

        ],



        "shortcuts" => [
            [
                "titre" => "<h4>Raccourcis <span>VSCODE</span></h4>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            <span>Couper/Copier/coller : </span>Ctrl + X / Ctrl + C / Ctrl + V,
                                        </li>
                                        <li>
                                            <span>Annuler/Refaire : </span>Ctrl + Z / Ctrl + Y
                                        </li>
                                        <li>
                                            <span>Tout sélectionner : </span>Ctrl + A
                                        </li>
                                        <li>
                                            <span>Rechercher : </span>Ctrl + F
                                        </li>
                                        <li>
                                            <span>Remplacer : </span>Ctrl + H
                                        </li>
                                        <li>
                                            <span>Changer toutes les occurences : </span>Ctrl + F2
                                        </li>
                                        <li>
                                            <span>Formater : </span>Alt + Ctrl + i / Alt + Ctrl + F
                                        </li>
                                        <li>
                                            <span>Curseur multilignes : </span>Alt + Ctrl + flèche haut / bas ou Alt + click
                                        </li>
                                        <li>
                                            <span>Ouvrir un fichier : </span>Ctrl + O
                                        </li>
                                        <li>
                                            <span>Sauvegarder : </span>Ctrl + S
                                        </li>
                                        <li>
                                            <span>Paramètres : </span>Ctrl + ,
                                        </li>
                                        <li>
                                            <span>Word Wrap : </span>Alt + Z
                                        </li>
                                        <li>
                                            <span>Next Word : </span>Ctrl + flèche gauche / droite
                                        </li>
                                        <li>
                                            <span>Début/fin du document : </span>Ctrl + début / fin
                                        </li>
                                        <li>
                                            <span>Générer une entête HTML : </span>touche '!' puis 'Entrée'
                                        </li>
                                    </ul>
                                </p>"
            ],

            [
                "titre" => "<h4>Raccourcis <span>Téléporteur</span></h4>",
                "texte" => "<p>
                                    <ul>
                                        <li>
                                            <span>Accéder au menu avec le clavier : </span>Ctrl + touche 'Début' (Ctrl de droite)
                                        </li>
                                    </ul>
                                </p>"
            ]
        ],

        "PHP" => [

            [
                "titre" => "<span>#1</span> Ajouter un élément dans un array",
                "texte" => "<p>
                        <code><pre>
                            \$array = []; <br>
                                \$array[] = 'elt'; <br>
                        
                        </pre></code></p>"
            ],

            [
                "titre" => "<span>#2</span> Récupérer des paramètres via l'url",
                "texte" => "<p>
                        <code><pre>
                            \$_GET['id'] = 'name';
                            <br>
                            <span>Url : 'xxx.php?id='name'</span>
                        </pre></code>
                                    </p>"
            ],

            [
                "titre" => "<span>#3</span> Parcourir un tableau associatif",
                "texte" => "<p>
                        <code><pre>
                            <span>\$data</span> = ['elt' => 3, 'pet' => 'cat', 'float' => 2.1];

                            foreach (<span>\$data</span> as \$key => \$value) {
                                echo \$value;
                            }
                        </pre></code>
                                    </p>"
            ]

        ],

        "JS" => [
            [
                "titre" => "<span>#1</span> Créer et ajouter une liste dans le DOM",
                "texte" => "<p>
                        <code><pre>
                            var newLi</span> = <span>document.createElement</span>('li');
                            var newLiContent = <span>document.textContent</span>('Un peu de contenu...');
                            newLi.<span>appendChild</span>(newLiContent);

                            var truc = <span>document.querySelector</span>('#myDiv');
                            truc.<span>appendChild</span>(newLi);
                        </pre></code>
                                    </p>"
            ],

            [
                "titre" => "<span>#2</span> Créer des fonctions anonymes dans un module",
                "texte" => "<p>
                        <code><pre>
                            var app = {
                                init: <span>function</span>() {
                                    app.<span>myFunction</span>(argument);
                                    app.<span>myOverFunction()</span>;
                                },

                                myFunction: <span>function</span>(parameter) {
                                    var question = <span>prompt</span>(parameter);

                                    <span>return</span> question;
                                },
                            };
                        </pre></code>
                                    </p>"
            ]

        ],

        "planning" => [
            [
                "titre" => "Planning de la session <span>Y</span>",
                "texte" => "
            <table>
                <tr>
                    <th>Date</th>
                    <th></th>
                    <th>Programme</th>
                </tr>
                <tr>
                    <td>23/09/2019</td>
                    <td>lundi</td>
                    <td>S00 Introduction</td>
                </tr>
                <tr>
                    <td>24/09/2019</td>
                    <td>mardi</td>
                    <td>S00 Introduction</td>
                </tr>
        
                <tr>
                    <td>07/10/2019</td>
                    <td>lundi</td>
                    <td>S01 - Hello World</td>
                </tr>
                <tr>
                    <td>08/10/2019</td>
                    <td>mardi</td>
                    <td>S01 - Client</td>
                </tr>
                <tr>
                    <td>09/10/2019</td>
                    <td>mercredi</td>
                    <td>S01 - Client</td>
                </tr>
                <tr>
                    <td>10/10/2019</td>
                    <td>jeudi</td>
                    <td>S01 - Client</td>
                </tr>
                <tr>
                    <td>11/10/2019</td>
                    <td>vendredi</td>
                    <td>S01 - Client</td>
                </tr>
                <tr>
                    <td>12/10/2019</td>
                </tr>
                <tr>
                    <td>13/10/2019</td>
                </tr>
                <tr>
                    <td>14/10/2019</td>
                    <td>lundi</td>
                    <td>S01 - Client</td>
                </tr>
                <tr>
                    <td>15/10/2019</td>
                    <td>mardi</td>
                    <td>S01 - Client</td>
                </tr>
                <tr>
                    <td>16/10/2019</td>
                    <td>mercredi</td>
                    <td>S01 - Client</td>
                </tr>
                <tr>
                    <td>17/10/2019</td>
                    <td>jeudi</td>
                    <td>-- Repos --</td>
                </tr>
                <tr>
                    <td>18/10/2019</td>
                    <td>vendredi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>19/10/2019</td>
                </tr>
                <tr>
                    <td>20/10/2019</td>
                </tr>
                <tr>
                    <td>21/10/2019</td>
                    <td>lundi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>22/10/2019</td>
                    <td>mardi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>23/10/2019</td>
                    <td>mercredi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>24/10/2019</td>
                    <td>jeudi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>25/10/2019</td>
                    <td>vendredi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>26/10/2019</td>
                </tr>
                <tr>
                    <td>27/10/2019</td>
                </tr>
                <tr>
                    <td>28/10/2019</td>
                    <td>lundi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>29/10/2019</td>
                    <td>mardi</td>
                    <td>S02 - Serveur</td>
                </tr>
                <tr>
                    <td>30/10/2019</td>
                    <td>mercredi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>31/10/2019</td>
                    <td>jeudi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>01/11/2019</td>
                    <td>vendredi</td>
                    <td>-- Férié --</td>
                </tr>
                <tr>
                    <td>02/11/2019</td>
                </tr>
                <tr>
                    <td>03/11/2019</td>
                </tr>
                <tr>
                    <td>04/11/2019</td>
                    <td>lundi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>05/11/2019</td>
                    <td>mardi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>06/11/2019</td>
                    <td>mercredi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>07/11/2019</td>
                    <td>jeudi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>08/11/2019</td>
                    <td>vendredi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>09/11/2019</td>
                </tr>
                <tr>
                    <td>10/11/2019</td>
                </tr>
                <tr>
                    <td>11/11/2019</td>
                    <td>lundi</td>
                    <td>-- Férié --</td>
                </tr>
                <tr>
                    <td>12/11/2019</td>
                    <td>mardi</td>
                    <td>S03 - Interactions</td>
                </tr>
                <tr>
                    <td>13/11/2019</td>
                    <td>mercredi</td>
                    <td>ATELIER REVISIONS</td>
                </tr>
                <tr>
                    <td>14/11/2019</td>
                    <td>jeudi</td>
                    <td>-- Repos --</td>
                </tr>
                <tr>
                    <td>15/11/2019</td>
                    <td>vendredi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>16/11/2019</td>
                </tr>
                <tr>
                    <td>17/11/2019</td>
                </tr>
                <tr>
                    <td>18/11/2019</td>
                    <td>lundi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>19/11/2019</td>
                    <td>mardi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>20/11/2019</td>
                    <td>mercredi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>21/11/2019</td>
                    <td>jeudi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>22/11/2019</td>
                    <td>vendredi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>23/11/2019</td>
                </tr>
                <tr>
                    <td>24/11/2019</td>
                </tr>
                <tr>
                    <td>25/11/2019</td>
                    <td>lundi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>26/11/2019</td>
                    <td>mardi</td>
                    <td>S04 - POO &amp; Données</td>
                </tr>
                <tr>
                    <td>27/11/2019</td>
                    <td>mercredi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>28/11/2019</td>
                    <td>jeudi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>29/11/2019</td>
                    <td>vendredi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>30/11/2019</td>
                </tr>
                <tr>
                    <td>01/12/2019</td>
                </tr>
                <tr>
                    <td>02/12/2019</td>
                    <td>lundi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>03/12/2019</td>
                    <td>mardi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>04/12/2019</td>
                    <td>mercredi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>05/12/2019</td>
                    <td>jeudi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>06/12/2019</td>
                    <td>vendredi</td>
                    <td>S05 - Architecture</td>
                </tr>
                <tr>
                    <td>07/12/2019</td>
                </tr>
                <tr>
                    <td>08/12/2019</td>
                </tr>
                <tr>
                    <td>09/12/2019</td>
                    <td>lundi</td>
                    <td>ATELIER REVISIONS</td>
                </tr>
                <tr>
                    <td>10/12/2019</td>
                    <td>mardi</td>
                    <td>-- Repos --</td>
                </tr>
                <tr>
                    <td>11/12/2019</td>
                    <td>mercredi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>12/12/2019</td>
                    <td>jeudi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>13/12/2019</td>
                    <td>vendredi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>14/12/2019</td>
                </tr>
                <tr>
                    <td>15/12/2019</td>
                </tr>
                <tr>
                    <td>16/12/2019</td>
                    <td>lundi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>17/12/2019</td>
                    <td>mardi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>18/12/2019</td>
                    <td>mercredi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>19/12/2019</td>
                    <td>jeudi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>20/12/2019</td>
                    <td>vendredi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>21/12/2019</td>
                </tr>
                <tr>
                    <td>22/12/2019</td>
                </tr>
                <tr>
                    <td>23/12/2019</td>
                    <td>lundi</td>
                    <td>S06 - API</td>
                </tr>
                <tr>
                    <td>24/12/2019</td>
                    <td>mardi</td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>25/12/2019</td>
                    <td>mercredi</td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>26/12/2019</td>
                    <td>jeudi</td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>27/12/2019</td>
                    <td>vendredi</td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>28/12/2019</td>
                    <td></td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>29/12/2019</td>
                    <td></td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>30/12/2019</td>
                    <td>lundi</td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>31/12/2019</td>
                    <td>mardi</td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>01/01/2020</td>
                    <td>mercredi</td>
                    <td>-- vacances de Noël --</td>
                </tr>
                <tr>
                    <td>02/01/2020</td>
                    <td>jeudi</td>
                    <td>S07 - Fullstack</td>
                </tr>
                <tr>
                    <td>03/01/2020</td>
                    <td>vendredi</td>
                    <td>S07 - Fullstack</td>
                </tr>
                <tr>
                    <td>04/01/2020</td>
                   
                </tr>
                <tr>
                    <td>05/01/2020</td>
                    
                </tr>
                <tr>
                    <td>06/01/2020</td>
                    <td>lundi</td>
                    <td>S07 - Fullstack</td>
                </tr>
                <tr>
                    <td>07/01/2020</td>
                    <td>mardi</td>
                    <td>S07 - Fullstack</td>
                </tr>
                <tr>
                    <td>08/01/2020</td>
                    <td>mercredi</td>
                    <td>S07 - Fullstack</td>
                </tr>
                <tr>
                    <td>09/01/2020</td>
                    <td>jeudi</td>
                    <td>S07 - Fullstack</td>
                </tr>
                <tr>
                    <td>10/01/2020</td>
                    <td>vendredi</td>
                    <td>S07 - Fullstack</td>
                </tr>
                <tr>
                    <td>11/01/2020</td>
                </tr>
                <tr>
                    <td>12/01/2020</td>
                </tr>
                <tr>
                    <td>13/01/2020</td>
                    <td>lundi</td>
                    <td>S08 - Déploiement &amp; CMS</td>
                </tr>
                <tr>
                    <td>14/01/2020</td>
                    <td>mardi</td>
                    <td>S08 - Déploiement &amp; CMS</td>
                </tr>
                <tr>
                    <td>15/01/2020</td>
                    <td>mercredi</td>
                    <td>S08 - Déploiement &amp; CMS</td>
                </tr>
                <tr>
                    <td>16/01/2020</td>
                    <td>jeudi</td>
                    <td>S08 - Déploiement &amp; CMS</td>
                </tr>
                <tr>
                    <td>17/01/2020</td>
                    <td>vendredi</td>
                    <td>S08 - Déploiement &amp; CMS</td>
                </tr>
                <tr>
                    <td>18/01/2020</td>
                </tr>
                <tr>
                    <td>19/01/2020</td>
                </tr>
                <tr>
                    <td>20/01/2020</td>
                    <td>lundi</td>
                    <td>S08 - Déploiement &amp; CMS</td>
                </tr>
                <tr>
                    <td>21/01/2020</td>
                    <td>mardi</td>
                    <td>-- repos --</td>
                </tr>
                <tr>
                    <td>22/01/2020</td>
                    <td>mercredi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>23/01/2020</td>
                    <td>jeudi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>24/01/2020</td>
                    <td>vendredi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>25/01/2020</td>
                </tr>
                <tr>
                    <td>26/01/2020</td>
                </tr>
                <tr>
                    <td>27/01/2020</td>
                    <td>lundi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>28/01/2020</td>
                    <td>mardi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>29/01/2020</td>
                    <td>mercredi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>30/01/2020</td>
                    <td>jeudi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>31/01/2020</td>
                    <td>vendredi</td>
                    <td>-- repos --</td>
                </tr>
                <tr>
                    <td>01/02/2020</td>
                </tr>
                <tr>
                    <td>02/02/2020</td>
                </tr>
                <tr>
                    <td>03/02/2020</td>
                    <td>lundi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>04/02/2020</td>
                    <td>mardi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>05/02/2020</td>
                    <td>mercredi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>06/02/2020</td>
                    <td>jeudi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>07/02/2020</td>
                    <td>vendredi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>08/02/2020</td>
                </tr>
                <tr>
                    <td>09/02/2020</td>
                </tr>
                <tr>
                    <td>10/02/2020</td>
                    <td>lundi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>11/02/2020</td>
                    <td>mardi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>12/02/2020</td>
                    <td>mercredi</td>
                    <td>-- repos --</td>
                </tr>
                <tr>
                    <td>13/02/2020</td>
                    <td>jeudi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>14/02/2020</td>
                    <td>vendredi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>15/02/2020</td>
                </tr>
                <tr>
                    <td>16/02/2020</td>
                </tr>
                <tr>
                    <td>17/02/2020</td>
                    <td>lundi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>18/02/2020</td>
                    <td>mardi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>19/02/2020</td>
                    <td>mercredi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>20/02/2020</td>
                    <td>jeudi</td>
                    <td>Spé</td>
                </tr>
                <tr>
                    <td>21/02/2020</td>
                    <td>vendredi</td>
                    <td>-- repos -- préparation projet --</td>
                </tr>
                <tr>
                    <td>22/02/2020</td>
                </tr>
                <tr>
                    <td>23/02/2020</td>
                </tr>
                <tr>
                    <td>24/02/2020</td>
                    <td>lundi</td>
                    <td>journée pro</td>
                </tr>
                <tr>
                    <td>25/02/2020</td>
                    <td>mardi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>26/02/2020</td>
                    <td>mercredi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>27/02/2020</td>
                    <td>jeudi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>28/02/2020</td>
                    <td>vendredi</td>
                </tr>
                <tr>
                    <td>29/02/2020</td>
                </tr>
                <tr>
                    <td>01/03/2020</td>
                </tr>
                <tr>
                    <td>02/03/2020</td>
                    <td>lundi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>03/03/2020</td>
                    <td>mardi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>04/03/2020</td>
                    <td>mercredi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>05/03/2020</td>
                    <td>jeudi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>06/03/2020</td>
                    <td>vendredi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>07/03/2020</td>
                </tr>
                <tr>
                    <td>08/03/2020</td>
                </tr>
                <tr>
                    <td>09/03/2020</td>
                    <td>lundi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>10/03/2020</td>
                    <td>mardi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>11/03/2020</td>
                    <td>mercredi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>12/03/2020</td>
                    <td>jeudi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>13/03/2020</td>
                    <td>vendredi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>14/03/2020</td>
                </tr>
                <tr>
                    <td>15/03/2020</td>
                </tr>
                <tr>
                    <td>16/03/2020</td>
                    <td>lundi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>17/03/2020</td>
                    <td>mardi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>18/03/2020</td>
                    <td>mercredi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>19/03/2020</td>
                    <td>jeudi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>20/03/2020</td>
                    <td>vendredi</td>
                    <td>Apothéose</td>
                </tr>
                <tr>
                    <td>21/03/2020</td>
                </tr>
                <tr>
                    <td>22/03/2020</td>
                </tr>
                <tr>
                    <td>23/03/2020</td>
                    <td>lundi</td>
                    <td>Présentation des projets</td>
                </tr>
                <tr>
                    <td>24/03/2020</td>
                    <td>mardi</td>
                    <td>Présentation des projets</td>
                </tr>
                <tr>
                    <td>25/03/2020</td>
                    <td>mercredi</td>
                    <td>Présentation des projets</td>
                </tr>
                <tr>
                    <td>26/03/2020</td>
                    <td>jeudi</td>
                </tr>
            </table>"


            ],
        ],

        
        "challenges" => [

            [
                "titre" => "<span>#Challenges</span> ",
                "texte" => "En construction.."
            ],
        ]
    ];
