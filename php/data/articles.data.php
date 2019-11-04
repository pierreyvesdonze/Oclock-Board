<?php

$dataArticles = 
[

    $astuces = [
                1 => [
                    "titre" => "<h3>Astuce <span>#1</span> Souviens-toi...</h3>",
                    "texte" => "<p>
                                    <ul>
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
                                    </ul>
                                </p>"
                ],
                2 => [
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
                                            git add  .
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
                3 => [
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
                4 => [
                    "titre" => "<h3>Astuce <span>#4</span> La fausse manip GIT qui fait mal...</h3>",
                    "texte" => "<p>
                                    <ul>
                                        <li>
                                            Si tu clones un dépôt depuis GIT portant le même nom de dossier que ton dépôt local sans avoir pris soin de commit/push au préalable, ton dépôt local et tout ce qu'il contient seront anéantis, comme toi.
                                        </li>
                                    </ul>
                                </p>"
                ],

                5 => [
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

                6 => [
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

                7 => [
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

                8 => [
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
            


    $shortCuts = [
                1 => [
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

                2 => [
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

    $memosPhp = [ 

                    1 => [
                        "titre" => "<h4><span>#1</span> Ajouter un élément dans un array</h4>",
                        "texte" => "<p>
                        <code><pre>
                            \$array = []; <br>
                                \$array[] = 'elt'; <br>
                        
                        </pre></code></p>"
                    ],

                    2 => [
                        "titre" => "<h4><span>#2</span> Récupérer des paramètres via l'url</h4>",
                        "texte" => "<p>
                        <code><pre>
                            \$_GET['id'] = 'name';
                            <br>
                            <span>Url : 'xxx.php?id='name'</span>
                        </pre></code>
                                    </p>"
                    ],

                    3 => [
                        "titre" => "<h4><span>#3</span> Parcourir un tableau associatif</h4>",
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

    $memosJs = [
                    1 => [
                        "titre" => "<h4><span>#1</span> Créer et ajouter une liste dans le DOM</h4>",
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

                    2 => [
                        "titre" => "<h4><span>#2</span> Créer des fonctions anonymes dans un module</h4>",
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
];
